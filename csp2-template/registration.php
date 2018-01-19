<?php 

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);
// $confirmPassword = htmlspecialchars($_POST['confirmPassword']);

// echo $userName . ' ' . $passWord . ' ' . $confirmPassword;

// require 'assets/users.php';

// array_push($users,["username" => $userName, "password" => $passWord]);

// var_dump($users);

// import json file
$file = file_get_contents('assets/users.json');

// convert to associative array for PHP access
$users = json_decode($file, true);


array_push($users, array("username" => $userName, "password" => $passWord));
// var_export($users);

// open the file to be updated.
$file = fopen('assets/users.json', 'w');

// update the users.json file
fwrite($file, json_encode($users, JSON_PRETTY_PRINT));

// close file
fclose($file);

header('loacation: login.php');
 ?>