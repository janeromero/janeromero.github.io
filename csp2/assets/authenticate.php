<?php 

session_start();

require '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT u.username, u.user_password, r.role FROM users u JOIN roles r ON (u.role_id = r.id) WHERE u.username = '$username'";

$result = mysqli_query($conn, $sql);

$isLogInSuccessful = false;

if (mysqli_num_rows($result) > 0) {
	$user = mysqli_fetch_assoc ($result);

	if ($username == $user['username'] && $password == $user['user_password']) {
		$isLogInSuccessful = true;
		$_SESSION['current_user'] = $user['username'];
		$_SESSION['role'] = $user['role'];
	}
}



if ($isLogInSuccessful) {
	header('location: ../home.php');
} else {
	header('location: ../user_login.php');
}


 ?>