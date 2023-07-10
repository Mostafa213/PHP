<?php
require_once('user.php');
require_once("DataBase.php");
require_once('quiz.php');
session_start();


echo 'etl3 bra<br>';
$questions = quiz::modelAnswer(intval($_SESSION['user']->getQuizId()));
$q2 = quiz::makeQuiz(intval($_SESSION['user']->getQuizId()));
$mysqli= DB::getInstance();

$arr = array();
$cond = 0;
$sum = 0;
$ansa = array();
$multcheack = 0;
if (isset($_POST['answer'])) {
    $cond = count($_POST['answer']) - 2;
    $arr = $_POST['answer'];
}
for ($i = 0; $i < count($_POST) + $cond; $i++) {
    if (!isset($arr[$i])) {
        $arr[$i] = $_POST['answer' . $i . ''];
    }
}
/////////////////////////////////////////////
for ($i = 0; $i < count($_POST) + $cond; $i++) {
    $number = 65;
    $ar = array(
        'question' => '',
        'answer' => array(),
    );
    $ar['question'] = $q2[$i]['question'];
    if (isset($_POST['answer'][$i])) {
        $ar['answer'][$arr[$i]] = $q2[$i]['options'][$arr[$i]];
    } else if (isset($_POST['answer' . $i])) {
        for ($j = 0; $j < 4; $j++) {
            if (isset($_POST['answer' . $i][$j])) {
                $ar['answer'][$arr[$i][$j]] = $q2[$i]['options'][$arr[$i][$j]];
            }
        }
    }
    array_push($ansa, $ar);
}
//////////////////////////////////////////////
for ($i = 0; $i < count($_POST) + $cond; $i++) {
    if (isset($_POST['answer'][$i])) {
        if ($arr[$i] == $questions[$i][0]) {
            print('+1<br>');
            $sum++;
        }
    } else if (isset($_POST['answer' . $i])) {
        for ($j = 0; $j < 4; $j++) {
            if (isset($_POST['answer' . $i][$j])) {
                if ($questions[$i][$j] == $arr[$i][$j]) {
                    $multcheack++;
                }
            }
        }
        if ($multcheack == count($_POST['answer' . $i])) {
            print('-1<br>');
            $sum++;
            $multcheack = 0;
        }
        $multcheack = 0;
    }
}

$resultjason = json_encode($ansa);
print_r($_SESSION['user']->getId());
$quer = "update applicant set answer = '$resultjason' , result = $sum where userID = ".$_SESSION['user']->getId();
$mysqli->query($quer);
header('Location: ../front/Applicant.php');
