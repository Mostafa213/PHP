<?php
require_once('../smarty/libs/Smarty.class.php');
require "../Back_end/init.php";


$smarty = new Smarty();


$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$smarty->assign('linkedin', $linkedin);


$smarty->display('../front/templates/pages/login_linkedin.tpl');
