<?php
require_once('../smarty/libs/Smarty.class.php');
require_once('../Back_end/user.php');
require_once "../Back_end/init.php";
$accessToken = $linkedin->getAccessToken($_GET['code']);
$profileObject = $linkedin->getPerson();
$emailObject = $linkedin->getEmail();

if (isset($profileObject['id'])) {
        applicant::addUser($email, $pass, $name, $username);
        $user = new user();
        $user->login($username, $pass);
        $_SESSION['user'] = $user;
}

$smarty = new Smarty();

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$smarty->assign('emailObject', $emailObject);
$smarty->assign('profileObject', $profileObject);
$smarty->display('../front/templates/pages/callBack.tpl');
