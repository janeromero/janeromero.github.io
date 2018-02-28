<?php 

// connection parameters
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'fhbl';

$conn = mysqli_connect($hostname, $username, $password, $db_name);


// testing

// if ($conn)
// 	echo 'Good';
// else
// 	die ('failed' . mysqli_error($conn));

if (!$conn)
	die ('Connection Failed:' . mysqli_error($conn));
 ?>

