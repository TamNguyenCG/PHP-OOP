<?php
include_once "../vendor/autoload.php";
use src\User;
use src\UserManager;

$index = $_REQUEST['index'];
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];

$item = [
    "name" => $name,
    "age" => $age,
    "address" => $address,
    "phone" => $phone
];
$object = new User($item);

$edit = new UserManager('../data.json');
$edit->editUser($object,$index);
header('Location: ../index.php');

