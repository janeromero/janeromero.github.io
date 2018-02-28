<?php 	

require '../connect.php';

$username = $_POST['username'];
$fname = $_POST['user_firstname'];
$lname = $_POST['user_lastname'];
$password = $_POST['user_password'];
$email = $_POST['email'];
$contact = $_POST['contact_no'];
$address = $_POST['address'];
$role = 2;


$sql = "INSERT INTO users (username, user_firstname, user_lastname, user_password, email, contact_no, address, role_id) VALUES ('$username', '$fname', '$lname', '$password', '$email', '$contact', '$address', '$role')";

$result = mysqli_query($conn, $sql);

if($result)
	header('location: ../user_login.php');
else
	die('Error: ' . $sql . '<br>' . mysqli_error($conn));

mysqli_close($conn);




 ?>