<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
  	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<title>PHP Programming - Expressions</title>
</head>
<body>

	<?php 
	//Assigment

	// $companyName = "";

	// $companyName = "Tuitt Coding Bootcamp";

	// echo $companyName;

	//

	// $counter = 0;

	// echo $counter;
	// echo "<br>";

	// $counter += 230;

	// echo $counter;

	//

	//Arithmetic Operator

	// $counter = 15;

	// echo $counter . "<br>";

	// $counter = $counter + 5; //$counter += 5

	// echo $counter . "<br>";

	// $counter = $counter - 3; //$counter -= 3

	// echo $counter . "<br>";

	// $counter = $counter * 8; //$counter *= 8

	// echo $counter . "<br>";

	// $counter = $counter / 16; //$counter /=16

	// echo $counter . "<br>";

	// $row = 12;

	// $counter = $counter . $row;

	// echo $counter . "<br>";

	// $counter = $counter % 4;

	// echo $counter . "<br>";

	//

	// BEDMAS or PEMDAS


	// $bankBalance = 99;
	// $deposit = 1000;

	// if ($bankBalance < 100) {
	// 	$bankBalance = $bankBalance + $deposit;
	// 	echo "Your balance is now updated.";
	// }
	// else
	// 	echo "Your bank balance is greater than or equal to 100.";

	// echo "<br>" . $bankBalance;

	$firstNumber = 1;
	$secondNumber = 2;

	if ($firstNumber > $secondNumber) {
		echo $firstNumber . " is greater than " . $secondNumber . "<br>";
	}

	if ($firstNumber < $secondNumber) {
		echo $firstNumber . " is less than " . $secondNumber . "<br>";
	}

	if ($firstNumber >= $secondNumber) {
		echo $firstNumber . " is greater than or equal to " . $secondNumber . "<br>";
	}

	if ($firstNumber <= $secondNumber) {
		echo $firstNumber . " is less than or equal to " . $secondNumber . "<br>";
	}

	 ?>



</body>
</html>