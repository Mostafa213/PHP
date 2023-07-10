<?php
require_once('../smarty/libs/Smarty.class.php');
require_once('../Back_end/user.php');
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']->getRole() == 0) {
        header('Location: applicant.php');
    } elseif ($_SESSION['user']->getRole() == 1) {
        header('Location: admin.php');
    }
}


if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new user();
    $result = $user->login($username, $password);
    if ($result != -1) {
        if ($result == 1) {
            $_SESSION['user'] = $user;
            header("Location: adminWelcome.php?page=home");
        } else
        if ($result == 0) {
            $_SESSION['user'] = $user;
            header("Location: applicant.php?page=home");
        }
    }
}
$smarty = new Smarty();


$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$smarty->display('../front/templates/pages/login.tpl');