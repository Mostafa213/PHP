<?php
require_once("DataBase.php");
require_once '../vendor/adodb/adodb-php/adodb.inc.php';
require_once '../vendor/adodb/adodb-php/adodb-active-record.inc.php';

$db = NewADOConnection('mysql');
$db->connect("localhost", "root", "", "applicant_abm");
ADOdb_Active_Record::SetDatabaseAdapter($db);

class QuizActiveRecored extends ADODB_Active_Record
{
    var $_table = 'quiz';
}
class QuestionsActiveRecored extends ADODB_Active_Record
{
    var $_table = 'questions';
}
class quiz
{
    private $questions = array();
    // private $quizId = null;
    private $quizData = null;

    public function setQuizData($userId)
    {
        $adodb = new ADOdb_Active_Record('applicant');
        $quizID = $adodb->find(
            'UserID = ? ',
            array($userId),

        );
        $adodb = new QuizActiveRecored();
        $quizData = $adodb->find(
            'quizId = ? ',
            array($quizID[0]->quizid),

        );
        $quiz = array(
            'quizID' => null,
            'title' => '',
            'description' => '',
        );
        if (isset($quizData[0]->title)) {
            $quiz['title'] = $quizData[0]->title;
            $quiz['quizID'] = $quizData[0]->quizid;
            $quiz['description'] = $quizData[0]->description;
        }
        $this->quizData = $quiz;
    }


    public function setQuizQuestions()
    {
        if ($this->quizData['quizID'] == null) {
            return;
        }
        $arr = array(
            'question' => '',
            'options' => array(
                'A' => '',
                'B' => '',
                'C' => '',
                'D' => ''
            ),
            'ansnum' => 'single'
        );

        $adodb = new QuestionsActiveRecored();
        $quest = $adodb->find(
            'QuizID = ? ',
            array($this->quizData['quizID']),
        );

        for ($i = 0; $i < count($quest); $i++) {
            $counter = 0;
            $row2 = json_decode($quest[$i]->answer, true);
            $arr['question'] = $quest[$i]->question;
            $arr['options']['A'] = $row2[0]['answer'];
            if ($row2[0]['state']) {
                $counter++;
            }
            $arr['options']['B'] = $row2[1]['answer'];
            if ($row2[1]['state']) {
                $counter++;
            }
            if (isset($row2[2]['answer'])) {
                $arr['options']['C'] = $row2[2]['answer'];
                if (isset($row2[2]['state']) && $row2[2]['state']) {
                    $counter++;
                }
            } else {
                unset($arr['options']['C']);
            }
            if (isset($row2[3]['answer'])) {
                $arr['options']['D'] = $row2[3]['answer'];
                if (isset($row2[3]['state']) && $row2[3]['state']) {
                    $counter++;
                }
            } else {
                unset($arr['options']['D']);
            }

            if ($counter > 1) {
                $arr['ansnum'] = 'multy';
            } else {
                $arr['ansnum'] = 'single';
            }
            array_push($this->questions, $arr);
        }
    }

    public function getQuizData()
    {
        return $this->quizData;
    }

    public function getQuizId()
    {
        return $this->quizData['quizID'];
    }

    public function getQuizQuestions()
    {
        return $this->questions;
    }

    //////////////////////////////////////////////////  ///////////////////////////////////////////////////////


    public static function questionNumber($quizId)
    {
        $adodb = new QuestionsActiveRecored();
        $adodb = $adodb->find("QuizID =  $quizId");
        return count($adodb);
    }


    public static function makeQuiz($QuizID)
    {
        if ($QuizID == null) {
            return;
        }
        $ar = array();
        $arr = array(
            'question' => '',
            'options' => array(
                'A' => '',
                'B' => '',
                'C' => '',
                'D' => ''
            ),
            'ansnum' => 'single'
        );
        $adodb = new QuestionsActiveRecored();
        $adodb = $adodb->find("QuizID =  ?", [$QuizID]);
        for ($i = 0; $i < count($adodb); $i++) {
            $counter = 0;
            $row2 = json_decode($adodb[$i]->answer, true);
            $arr['question'] = $adodb[$i]->question;
            $arr['options']['A'] = $row2[0]['answer'];
            if ($row2[0]['state']) {
                $counter++;
            }
            $arr['options']['B'] = $row2[1]['answer'];
            if ($row2[1]['state']) {
                $counter++;
            }
            if (isset($row2[2]['answer'])) {
                $arr['options']['C'] = $row2[2]['answer'];
                if (isset($row2[2]['state']) && $row2[2]['state']) {
                    $counter++;
                }
            } else {
                unset($arr['options']['C']);
            }
            if (isset($row2[3]['answer'])) {
                $arr['options']['D'] = $row2[3]['answer'];
                if (isset($row2[3]['state']) && $row2[3]['state']) {
                    $counter++;
                }
            } else {
                unset($arr['options']['D']);
            }

            if ($counter > 1) {
                $arr['ansnum'] = 'multy';
            } else {
                $arr['ansnum'] = 'single';
            }
            array_push($ar, $arr);
        }

        return $ar;
        // $mysqli->close();
    }


    public static function getQuizzesData()
    {
        $arr = array();
        $ar = array(
            'quizID' => 0,
            'title' => '',
            'description' => '',
            'questionNumbers' => 0,
        );
        $adodb = new QuizActiveRecored();
        $adodb = $adodb->find(null);
        for ($i = 0; $i < count($adodb); $i++) {
            $Questiondb = new QuestionsActiveRecored();
            $Questiondb = $Questiondb->find("QuizID = ?", [$adodb[$i]->quizid]);
            $ar['quizId'] = intval($adodb[$i]->quizid);
            $ar['title'] = $adodb[$i]->title;
            $ar['description'] = $adodb[$i]->description;
            $ar['questionNumbers'] = count($Questiondb);
            array_push($arr, $ar);
        }
        return $arr;
    }

    //////////////////////////////////////////////////  ///////////////////////////////////////////////////////
    //////////////////////////////////////////////////  ///////////////////////////////////////////////////////

    public static function modelAnswer($QuizID)
    {
        $ar = array();
        $adodb = new QuestionsActiveRecored();
        $adodb = $adodb->find("QuizID =  $QuizID");
        for ($i = 0; $i < count($adodb); $i++) {
            $arr = array();
            $row2 = json_decode($adodb[$i]->answer, true);
            if ($row2[0]['state']) {
                array_push($arr, 'A');
            }
            if ($row2[1]['state']) {
                array_push($arr, 'B');
            }
            if (isset($row2[2]['state']) && $row2[2]['state']) {
                array_push($arr, 'C');
            }
            if (isset($row2[3]['state']) && $row2[3]['state']) {
                array_push($arr, 'D');
            }
            array_push($ar, $arr);
        }
        return $ar;
    }


    //////////////////////////////////////////////////////????????????????????????????????????????
    public static function generateQuiz($postData)
    {
        $mysqli = DB::getInstance();
        /* $sql = "select * from quiz where Title='" . $postData['title'] . "' and Description='" . $postData['description'] . "'";
        $result = $mysqli->query($sql);
        if (isset($result)) {
            return;
        } */
        $i = 1;
        $adodb = new QuizActiveRecored();
        $adodb->title = $postData['title'];
        $adodb->description = $postData['description'];
        $adodb->save();
        $row1['id'] = $adodb->quizid;
        print_r($row1['id']);

        while (isset($postData['question' . $i])) {
            $answer = array();
            // $stat = false;
            $ans = array(
                'answer' => '',
                'state' => false,
            );
            $j = 1;
            while (isset($postData['answer' . $j . 'q' . ($i - 1)])) {


                if (isset($postData['checkbox' . $j . 'q' . ($i - 1)])) {
                    if ($postData['checkbox' . $j . 'q' . ($i - 1)] == 'on') {
                        $ans['answer'] = $postData['answer' . $j . 'q' . ($i - 1)];
                        // $ans['answer']=str_replace("'", "'", $ans['answer']);
                        $ans['state'] = 1;
                        array_push($answer, $ans);
                    } else {
                        $ans['answer'] = $postData['answer' . $j . 'q' . ($i - 1)];
                        // $ans['answer']=str_replace("'", "\'", $ans['answer']);
                        $ans['state'] = 0;
                        array_push($answer, $ans);
                    }
                } else if ($postData['answer' . $j . 'q' . ($i - 1)] != '') {
                    $ans['answer'] = $postData['answer' . $j . 'q' . ($i - 1)];
                    // $ans['answer']=str_replace("'", "\'", $ans['answer']);
                    $ans['state'] = 0;
                    array_push($answer, $ans);
                }


                $j++;
            }
            $json = json_encode($answer);
            $json = str_replace("'", "\'", $json);
            $quistiondb = new QuestionsActiveRecored();
            $quistiondb->question = $postData['question' . $i];
            $quistiondb->answer =  $json;
            $quistiondb->quizid =  $row1['id'];
            $quistiondb->save();
            $i++;
        }
    }

    ////////////////////////////////////////////////////////
    public static function editQuiz($postData)
    {
        $i = 1;

        $mysqli = DB::getInstance();
        $sql = 'delete from questions where QuizID=' . $postData['id'];
        $mysqli->query($sql);
        print_r($postData['id']);

        while (isset($postData['question' . $i])) {
            echo "<pre>";
            print_r($postData['question' . $i]);
            echo "</pre>";
            $answer = array();
            $stat = false;
            $ans = array(
                'answer' => '',
                'state' => false,
            );
            $j = 1;
            while (isset($postData['answer' . $j . 'q' . ($i - 1)])) {
                if (isset($postData['checkbox' . $j . 'q' . ($i - 1)])) {
                    if ($postData['checkbox' . $j . 'q' . ($i - 1)] == 'on') {
                        $ans['answer'] = $postData['answer' . $j . 'q' . ($i - 1)];
                        $ans['state'] = 1;
                        array_push($answer, $ans);
                    } else {
                        $ans['answer'] = $postData['answer' . $j . 'q' . ($i - 1)];
                        $ans['state'] = 0;
                        array_push($answer, $ans);
                        print_r($answer);
                        echo '<br>';
                    }
                } else if ($postData['answer' . $j . 'q' . ($i - 1)] != '') {
                    $ans['answer'] = $postData['answer' . $j . 'q' . ($i - 1)];
                    $ans['state'] = 0;
                    array_push($answer, $ans);
                }
                $j++;
            }
            $json = json_encode($answer);
            $json = str_replace("'", "\'", $json);

            $sql = "insert into questions(Question, Answer, QuizID) values ('" . $postData['question' . $i] . "','" . $json . "'," . $postData['id'] . ")";
            $mysqli->query($sql);
            $i++;
        }
        // $mysqli->close();

    }

    ////////////////////////////////////////////////
    public static function getQuizFullData($QuizID)
    {
        $ar = array();
        $adodb = new QuestionsActiveRecored();
        $adodb = $adodb->find("QuizID =   $QuizID");
        for ($i = 0; $i < count($adodb); $i++) {
            $arr = array(
                'question' => '',
            );
            $answer = json_decode($adodb[$i]->answer, true);
            $arr['question'] = $adodb[$i]->question;
            for ($j = 0; $j < count($answer); $j++) {
                $arr['answer'][$j]['answer'] = $answer[$j]['answer'];
                $arr['answer'][$j]['state'] = $answer[$j]['state'];
            }
            array_push($ar, $arr);
        }

        $ar['id'] = $QuizID;

        $dataEncoded = json_encode($ar);
        return $dataEncoded;


        ////////////////////////////////////////////////////////////////////???????????????????????????????????????/

    }
}
