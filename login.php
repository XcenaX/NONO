<?php
//echo realpath (dirname(__FILE__));
include "vendor/autoload.php";
include "Database.php";
//include "autoload.php";
//session_start();

$data = $_GET;

if($data["userName"] == null){
    echo "No username passed";
    exit();
}
if($data["password"] == null){
    echo "No password passed";
    exit();
}

$db = new Database();
$user = $db->query("SELECT * FROM users WHERE userName='" . $data["userName"] . "'")[0];

if($user == null){
    echo "Username is not valid";
    exit();
}
else if($user["password"] != $data["password"]){
    echo "password is not valid";
    exit();
}

$_SESSION["user"] = $user["id"];
header("Location: /");
