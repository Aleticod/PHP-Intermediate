<?php 
session_start();

$users = [
    array(
        "username" => "carlitos",
        "password" => "1234",
        "email" => "carlitos@gmail.com",
    ),
    array(
        "username" => "pepito",
        "password" => "12346",
        "email" => "pepito@gmail.com",
    ),
];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
$_sessio["password"] = $users[$user]["password"];