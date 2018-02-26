<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>PHP Programming - Expressions, Control Statements, and Loops</title>

	<style type="text/css">
		.box {
			border: 1px solid black;
			padding: 10px;
			display: inline-block;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
		}
	</style>

</head>
<body>

	<?php

	// Logical Operator

	// AND => &&, OR => ||, XOR , NOT => !

	// $a = 1;
	// $b = 0;

	// echo ($a AND $b) . '<br>'; // NULL

	// echo ($a OR $b) . '<br>'; // 1

	// echo ($a XOR $b) . '<br>'; // 1

	// echo (!$a) . '<br>'; // NULL

	// truth table

	// $a = 1;
	// $b = 0;

	// $a AND $b => false
	// echo ($a AND $b) . '<br>';
	// var_dump($a AND $b);

	// bool() -> true (1), false (0) -> data type

	// $a OR $b => true
	// var_dump($a OR $b);

	// $a XOR $b => true
	// var_dump($a XOR $b);

	// $a = 1;
	// $b = 1;

	// // $a AND $b => true
	// echo ($a AND $b) . '<br>';
	// var_dump($a AND $b);

	// $a OR $b => true
	// var_dump($a OR $b);

	// $a XOR $b => false
	// var_dump($a XOR $b);

	// $a = 0;
	// $b = 1;

	// $a AND $b => false
	// var_dump($a AND $b);

	// $a OR $b => true
	// var_dump($a OR $b);

	// $a XOR $b => true
	// var_dump($a XOR $b);

	// $a = 0;
	// $b = 1;

	// $a AND $b => false
	// var_dump($a AND $b);

	// $a OR $b => false
	// var_dump($a OR $b);

	// $a XOR $b => false
	// var_dump($a XOR $b);

	// var_dump(!$a); // Not $a
	// var_dump(!$b); // Not $b

	?>

	<?php

	// BMI Calculator

	// bmi = mass (kg) / height * height (m)

	// result:
	// 	< 16 -> severe thinness
	// 	16 - 17 -> moderate thinness
	// 	17 - 18.5 -> mild thinness
	// 	18.5 - 25 -> normal
	// 	25 - 30 -> overweight
	// 	30 - 35 -> obese class 1
	// 	35 - 40 -> obese class 2
	// 	> 40 -> obese class 3

	// $mass = 65; // kg
	// $height = 1.6;  // m

	// $bmi = $mass / ($height * $height);

	// echo 'Your BMI is ' . $bmi . '<br>';

	// if ($bmi < 16)
	// 	echo 'Result: Severe thinness';
	// else if ($bmi >= 16 AND $bmi <= 17)
	// 	echo 'Result: Moderate thinness';
	// else if ($bmi > 17 AND $bmi <= 18.5)
	// 	echo 'Result: Mild thinness';
	// else if ($bmi > 18.5 AND $bmi <= 25)
	// 	echo 'Result: Normal';
	// else if ($bmi > 25 AND $bmi <= 30)
	// 	echo 'Result: Overweight';
	// else if ($bmi > 30 AND $bmi <= 35)
	// 	echo 'Result: Obese Class 1';
	// else if ($bmi > 35 AND $bmi <= 40)
	// 	echo 'Result: Obese Class 2';
	// else
	// 	echo 'Result: Obese Class 3';

	// switch ($bmi) {
	// 	case $bmi < 16:
	// 		echo 'Result: Severe thinness';
	// 		break;
	// 	case $bmi >= 16 AND $bmi <= 17:
	// 		echo 'Result: Moderate thinness';
	// 		break;
	// 	case $bmi > 17 AND $bmi <= 18.5:
	// 		echo 'Result: Mild thinness';
	// 		break;
	// 	case $bmi > 18.5 AND $bmi <= 25:
	// 		echo 'Result: Normal';
	// 		break;
	// 	case $bmi > 25 AND $bmi <= 30:
	// 		echo 'Result: Overweight';
	// 		break;
	// 	case $bmi > 30 AND $bmi <= 35:
	// 		echo 'Result: Obese Class 1';
	// 		break;
	// 	case $bmi > 35 AND $bmi <= 40:
	// 		echo 'Result: Obese Class 2';
	// 		break;
	// 	case $bmi > 40:
	// 		echo 'Result: Obese Class 3';
	// 		break;
	// 	default:
	// 		break;
	// }

	// Loops

	// While loop

	// $number = 1;

	// while ($number <= 10) {
	// 	echo $number . ' ';
	// 	$number = $number + 2; // increment/step
	// }

	// Do..While loop

	// $count = 0;
	// do {
	// 	echo $count . ' ';
	// 	// $count += 1;
	// 	// $count++;
	// 	$count = $count + 2;
	// } while ($count <= 12);

	// For loop

	// $name = 'Juan Dela Cruz';

	// for ($counter = 1; $counter <= 10; $counter += 1) {
	// 	echo $name . '<br>';
	// }

	// activity 1

	// for ($counter = 1; $counter <= 10; $counter++) {
	// 	// echo $counter;
	// 	// if($counter < 10)
	// 	// 	echo "-";

	// 	if ($counter == 10 )
	// 		echo $counter;
	// 	else 
	// 		echo $counter.'-';
	// }

	// activity 2

	// for($row = 0; $row < 10; $row++){
	// 	for($col =0; $col <10; $col++){
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }

	// activity 3

	// for ($row = 1; $row <= 10; $row++) { // row
	// 	for ($col = 1; $col <= 10; $col++) { // columns
	// 		echo '<span class="box">' . $row * $col . '</span>';
	// 	}
	// 	echo '<br>';
	// }

	// activity 4

	// for ($row = 1; $row <= 10; $row++) { // row
	// 	for ($col = 1; $col <= $row; $col++) { // columns
	// 		echo '* ';
	// 	}

	// 	echo '<br>';
	// }

	// activity 5

	// for ($row = 10; $row >= 1; $row--) {  // row
	// 	for ($col = 1; $col <= $row; $col++) {  // columns
	// 		echo '* ';
	// 	}

	// 	echo '<br>';
	// }

	// activity 6

	for ($counter = 1; $counter <= 50; $counter++) {
		// divisible by 3
		if ($counter % 3 == 0)
			echo $counter . ' Fizz' . '<br>';
			
		// divisible by 5
		if ($counter % 5 == 0)
			echo $counter . ' Buzz' . '<br>';

		// divisible by 3 and 5
		if (($counter % 3 == 0) and ($counter % 5 == 0))
			echo $counter . ' FizzBuzz' . '<br>';
	}

	?>

</body>
</html>