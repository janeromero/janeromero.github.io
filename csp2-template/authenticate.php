<?php 

session_start();

$users = [
	['username' => 'admin', 'password' => 'abc123'],
	['username' => 'jane', 'password' => 'jane123'],
	['username' => 'user1', 'password' => 'abc111']

];

$isLoginSuccessful = false;	// monitor login staturs


$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);

// echo $userName;
// echo $passWord;

foreach ($users as $user) {
	// echo $user['username'] . '<br>';
	// echo $user['password'] . '<br>';

	if ($user['username'] == $userName && $user['password'] == $passWord) {
			// echo $userName . ' was found.';
			// echo 'Password is correct.';
			// header('location: home.php'); // after authentication, will re route to home.php
			$isLoginSuccessful = true;
			break;
		}
	}

	if ($isLoginSuccessful){
		//successful login
		// session_start();
		$_SESSION['current_user'] = $userName;
		header('location: home.php');
		
	}
	else {
		// failed login
		header('location: login.php');
	}	

	if (isset($_SESSION['current_user']) && $isLoginSuccessful)
		$_SESSION['message'] = 'Login was successful.';

	else 
		$_SESSION['message'] = 'Login was unsuccessful.';




 ?>