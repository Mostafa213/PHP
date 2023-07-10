<?php

use myPHPNotes\LinkedIn;

require_once "LinkedIn.php";

$app_id = "773t4yzxbdnh82";
$app_secret = "324dxq1tuMzrqtgf";
$callback = "http://localhost/Applicant%20Quiz%20-%20Edit/pages/callback.php";
$scopes = "r_emailaddress%20r_liteprofile";
$ssl = false; //TRUE FOR PRODUCTION ENV.

$linkedin = new LinkedIn($app_id, $app_secret, $callback, $scopes, $ssl); 