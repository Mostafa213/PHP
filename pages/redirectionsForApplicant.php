<?php
require_once('../Back_end/user.php');

function addQuiz($quizId, $userId, $name)
{
    applicant::updateQuiz($quizId, $userId);
    return "Added Quiz ID $quizId to $name";
}



/////////////////////////////////////////////Quiz//////////////////////////////////////////////////////


if (file_get_contents("php://input")) {
    $client_data = json_decode(file_get_contents("php://input"), true);
    if (isset($client_data['function']) && $client_data['function'] == 'addQuiz') {
        $quizId = $client_data['quizId'];
        $userId = $client_data['userId'];
        $name = $client_data['name'];
        $result = addQuiz($quizId, $userId, $name);
        echo $result;
    } else
    if (isset($client_data['function']) && $client_data['function'] == 'getQuizFullData') {
        $QuizID = $client_data['QuizID'];
        $result = quiz::getQuizFullData($QuizID);
        echo $result;
    }
}


if (isset($_POST['function'])) {
    if ($_POST['function'] == 'generate') {
        quiz::generateQuiz($_POST);
        header('Location: ../pages/adminWelcome.php?page=home');
    } else if ($_POST['function'] == 'edit') {
        quiz::editQuiz($_POST);
        header('Location: ../pages/adminWelcome.php?page=listQuiz');
    } else if ($_POST['function'] == 'correct') {
        $objApplicant = new applicant($_SESSION['user']->getId());
        $objApplicant->quizCorrection($_POST);
    }
}
