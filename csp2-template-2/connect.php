<?php

// Define required connection parameters
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'kraff_beeer';

// Create a connection to database
$conn = mysqli_connect($hostname, $username, $password, $db_name);

/*
 * Test database connection
 */

// if ($conn)
// 	echo 'Database connection was successful.';
// else
// 	die('Connection failed: ' . mysqli_error($conn));

if (!$conn)
	die('Connection failed: ' . mysqli_error($conn));