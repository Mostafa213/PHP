<?php
require_once('../smarty/libs/Smarty.class.php');
require_once('../Back_end/user.php');

// session_start();
if ((!isset($_SESSION['user'])) || $_SESSION['user']->getRole() != 0) {
	header('Location: login.php');
}
$smarty = new Smarty();


$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');




$objApplicant = new applicant($_SESSION['user']->getId());
if (!isset($_GET['page'])) {
	$quizzes = $objApplicant->getQuizData();
	$is_assigned_quiz = 0;
	$is_solved_quiz = $objApplicant->getQuizState();
	if (isset($quizzes['quizID'])) {
		$is_assigned_quiz = 1;
		$smarty->assign('quizzes', $quizzes);
	}
	$smarty->assign('is_assigned_quiz', $is_assigned_quiz);
	$smarty->assign('is_solved_quiz', $is_solved_quiz);

	$smarty->display('../front/templates/pages/applicant.tpl');
} else {

	switch ($_GET['page']) {
		case 'home':
			$quizzes = $objApplicant->getQuizData();
			$is_assigned_quiz = 0;
			$is_solved_quiz = $objApplicant->getQuizState();
			if (isset($quizzes['quizID'])) {
				$is_assigned_quiz = 1;
				$smarty->assign('quizzes', $quizzes);
			}
			$smarty->assign('is_assigned_quiz', $is_assigned_quiz);
			$smarty->assign('is_solved_quiz', $is_solved_quiz);

			$smarty->display('../front/templates/pages/applicant.tpl');
			break;

		case 'solveTheExam':
			$questions = $objApplicant->getQuiz();
			$smarty->assign('questions', $questions);

			$smarty->display('../front/templates/pages/exam.tpl');
			break;

		default:
			echo $_GET['page'];
			break;
	}
}
