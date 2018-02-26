<?php


$file = file_get_contents('users.json');
$emails = json_decode($file, true);
$useremails = [];

$email = $_POST['email'];

foreach ($emails as $email) {
	array_push($useremails, $email['email']);

}

if (isset($_POST['email'])) {
	$email_entered = $_POST['email'];

	if (!empty($email_entered)){

		if (in_array($email_entered, $useremails)) {
			echo 'Email Address <span class="red-message"> not valid </span>';
	
		} else {
			echo 'Email Address <span class ="green-message"> valid </span>';
	}

	} else {
		echo 'Email Address';
	}

}