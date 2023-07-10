<?php
require_once("DataBase.php");
require_once '../vendor/adodb/adodb-php/adodb.inc.php';
define('ADODB_ASSOC_CASE', ADODB_ASSOC_CASE_LOWER);
require_once('../Back_end/quiz.php');
require_once '../vendor/adodb/adodb-php/adodb-active-record.inc.php';

session_start();
$db = NewADOConnection('mysql');
$db->connect("localhost", "root", "", "applicant_abm");
ADOdb_Active_Record::SetDatabaseAdapter($db);

class UserActiveRecored extends ADODB_Active_Record
{
    var $_table = 'user';
}
class ApplicantActiveRecored extends ADODB_Active_Record
{
    var $_table = 'applicant';
}

class user
{
    private $userName;
    private $role;
    private $password;
    private $userId;

    public function login($userName, $pass)
    {
        $adodb = new UserActiveRecored();
        $user = $adodb->find(
            'userName = ? AND password = ?',
            array($userName, $pass),

        );
        if (isset($user[0]->role)) {
            $this->userName = $userName;
            $this->password = $pass;
            $this->role = $user[0]->role;
            $this->userId = intval($user[0]->userid);
            return intval($user[0]->role);
        }
        return -1;
    }

    public function setRole($intValue)
    {
        $this->role = $intValue;
    }


    protected function setUserDataForApplicant($userName, $password, $role, $userId)
    {
        $this->userName = $userName;
        $this->userId = $userId;
        $this->password = $password;
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    public function getId()
    {
        return $this->userId;
    }
    public function getPassword()
    {
        return $this->password;
    }
}

////////////////////////////////////////////////// APPLICANT ///////////////////////////////////////////////////////

class applicant
{
    private $quiz;
    private $state;
    private $intUserId;

    public function __construct($intUserId)
    {
        $this->intUserId = $intUserId;
        $this->quiz = new quiz();
        self::checkState();
    }



    public function checkState()
    {
        $this->quiz->setQuizData($this->intUserId);
        $this->quiz->setQuizQuestions();
        $adodb = new ApplicantActiveRecored();
        $adodb = $adodb->find(
            'userID = ?',
            array($this->intUserId),
        );

        if (isset($adodb[0]->answer)) {
            $this->state = 0;
        } else {
            $this->state = 1;
        }
    }
    public function getQuiz()
    {
        return $this->quiz->getQuizQuestions();
    }


    public function getQuizState()
    {
        return $this->state;
    }

    public function getQuizData()
    {
        return $this->quiz->getQuizData();
    }

    public function getQuizId()
    {
        return $this->quiz->getQuizId();
    }


    public function quizCorrection($postData)
    {
        $questions = quiz::modelAnswer($this->quiz->getQuizId());
        $q2 = quiz::makeQuiz($this->quiz->getQuizId());
        // $mysqli = DB::getInstance();

        $arr = array();
        $cond = 0;
        $sum = 0;
        $ansa = array();
        $multcheack = 0;
        if (isset($postData['answer'])) {
            $cond = count($postData['answer']) - 2;
            $arr = $postData['answer'];
        }
        for ($i = 0; $i < count($postData) + $cond; $i++) {
            if (!isset($arr[$i])) {
                $arr[$i] = $postData['answer' . $i . ''];
            }
        }
        /////////////////////////////////////////////
        for ($i = 0; $i < count($postData) + $cond; $i++) {
            $number = 65;
            $ar = array(
                'question' => '',
                'answer' => array(),
            );
            $ar['question'] = $q2[$i]['question'];
            if (isset($postData['answer'][$i])) {
                $ar['answer'][$arr[$i]] = $q2[$i]['options'][$arr[$i]];
            } else if (isset($postData['answer' . $i])) {
                for ($j = 0; $j < 4; $j++) {
                    if (isset($postData['answer' . $i][$j])) {
                        $ar['answer'][$arr[$i][$j]] = $q2[$i]['options'][$arr[$i][$j]];
                    }
                }
            }
            array_push($ansa, $ar);
        }
        //////////////////////////////////////////////
        for ($i = 0; $i < count($postData) + $cond; $i++) {
            if (isset($postData['answer'][$i])) {
                if ($arr[$i] == $questions[$i][0]) {
                    print('+1<br>');
                    $sum++;
                }
            } else if (isset($postData['answer' . $i])) {
                for ($j = 0; $j < 4; $j++) {
                    if (isset($postData['answer' . $i][$j])) {
                        if ($questions[$i][$j] == $arr[$i][$j]) {
                            $multcheack++;
                        }
                    }
                }
                if ($multcheack == count($postData['answer' . $i])) {
                    print('-1<br>');
                    $sum++;
                    $multcheack = 0;
                }
                $multcheack = 0;
            }
        }

        $resultjason = json_encode($ansa);
        $adodb = new ApplicantActiveRecored();
        $adodb->load("userID = $this->intUserId");
        $adodb->answer = $resultjason;
        $adodb->result = $sum;
        $adodb->save();
        /* echo$sum;
        echo'<pre>';
        print_r($ansa);
        echo'</pre>'; */
        header('Location: ../pages/applicant.php?page=home');
    }

    public function getId()
    {
        return $this->intUserId;
    }



    public static function getApplicantsData()
    {
        $arr = array();
        $adodb = new UserActiveRecored();
        $adodb = $adodb->find(
            'role = ?',
            array(0),
        );


        for ($i = 0; $i < count($adodb); $i++) {
            $ar = array(
                'userID' => 0,
                'username' => '',
                'password' => '',
                'email' => '',
                'name' => '',
                'result' => null,
                'quizID' => null,
                'state' => 0,
                'questionNumber' => 0,
            );
            $ar['userID'] = intval($adodb[$i]->userid);
            $ar['username'] = $adodb[$i]->username;
            $ar['password'] = $adodb[$i]->password;
            $adodbApplicant = new ApplicantActiveRecored();
            $adodbApplicant = $adodbApplicant->find(
                'UserID = ?',
                array($adodb[$i]->userid),
            );
            $row2 = json_decode($adodbApplicant[0]->data, true);
            $ar['email'] = $row2['email'];
            $ar['name'] = $row2['name'];
            if ($adodbApplicant[0]->quizid != null) {
                $ar['quizID'] = intval($adodbApplicant[0]->quizid);
                if (intval($adodbApplicant[0]->quizid) > 0) {
                    $ar['result'] = $adodbApplicant[0]->result;
                    $ar['state'] = 1;
                }
                $ar['questionNumber'] = quiz::questionNumber($ar['quizID']);
            }
            array_push($arr, $ar);
        }
        return $arr;
    }

    public static function updateQuiz($quizID, $userID)
    {
        $database = DB::getInstance();
        $adodb = new ApplicantActiveRecored();
        $adodb->load("UserID = $userID");
        $adodb->quizid = $quizID;
        $adodb->save();
    }

    public static function addUser($email, $pass, $name, $userName)
    {


        $adodb = new UserActiveRecored();
        $result = $adodb->find(
            'userName = ? AND password = ?',
            array($userName, $pass),

        );
        if (isset($result[0]->userid)) {
            return;
        }

        $userAdding = new UserActiveRecored();
        $userAdding->username = $userName;
        $userAdding->password = $pass;
        $userAdding->role = 0;
        $userAdding->save();
        $userAdding = $userAdding->Find('userName=? and password=?', array($userName, $pass));
        $arr = array(
            'email' => $email,
            'name' => $name,
            'username' => $userName,
            'password' => $pass
        );
        $data = json_encode($arr);
        $applicantAdding = new ApplicantActiveRecored();
        $applicantAdding->userid = $userAdding[0]->userid;
        $applicantAdding->data = $data;
        $applicantAdding->save();
    }

    public static function getResult($userID)
    {
        $adodb = new ApplicantActiveRecored();
        $adodb = $adodb->find(
            'userID = ?',
            array($userID),
        );
        $stringAnswer = $adodb[0]->answer;
        $res = json_decode($stringAnswer, true);
        return $res;
    }
}


