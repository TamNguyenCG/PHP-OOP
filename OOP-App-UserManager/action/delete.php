<?php
include_once "../vendor/autoload.php";
use src\UserManager;
$index = $_REQUEST['index'];
$userManager = new UserManager('../data.json');
$userManager->deleteUser($index);
header('Location: ../index.php');

