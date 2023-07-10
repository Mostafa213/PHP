<?php
require_once('../smarty/libs/Smarty.class.php');
require_once('../Back_end/user.php');

if ((!isset($_SESSION['user'])) || $_SESSION['user']->getRole() == 3) {
    header('Location: login.php');
} else
if ($_SESSION['user']->getRole() == 0) {
    header('Location: applicant.php');
}
$smarty = new Smarty();

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

if (!isset($_GET['page'])) {
    $smarty->display('../front/templates/pages/admin.tpl');
} else {

    switch ($_GET['page']) {
        case 'home':
            $smarty->display('../front/templates/pages/admin.tpl');
            break;
        case 'addQuiz':
            $smarty->assign('title', $_POST['title']);
            $smarty->assign('discription', $_POST['description']);
            $smarty->display('../front/templates/pages/addQuiz.tpl');
            break;
        case 'listApplicant':
            $result = applicant::getApplicantsData();
            $smarty->assign('result', $result);
            $smarty->display('../front/templates/pages/applicantList.tpl');
            break;
        case 'listQuiz':
            require_once('../Back_end/quiz.php');
            $result = quiz::getQuizzesData();
            $smarty->assign('result', $result);
            $smarty->display('../front/templates/pages/quizList.tpl');
            break;
        case 'editQuiz':
            $data = json_decode($_POST['data'], true);
            $smarty->assign('data', $data);
            $smarty->assign('postdata', $_POST['data']);
            $smarty->display('../front/templates/pages/editQuiz.tpl');
            break;
        case 'viewQuiz':
            $questions = quiz::makeQuiz($_GET['id']);
            $smarty->assign('questions', $questions);
            $smarty->display('../front/templates/pages/viewQuiz.tpl');
            break;
        case 'listResult':
            $questions = applicant::getResult($_GET['userID']);
            $smarty->assign('questions', $questions);
            $smarty->display('../front/templates/pages/listResult.tpl');
            break;
        default:
            echo $_GET['page'];
            break;
    }
}
