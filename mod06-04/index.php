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

	/* logical operators*/


	/*And => &&, OR => //, XOR, NOT=! */

	// $a = 1;
	// $b = 0;


	// echo ($a AND $b). "<br>"; /*NULL*/

	// echo ($a OR $b). "<br>"; 1

	// echo ($a XOR $b). "<br>"; /*1*/

	// echo (!$a). "<br>"; /*NULL*/

	/* truth table*/


	/*TAKE NOTE AND= MULTIPLICATION
				OR= ADDITION
				XOR= NOT 
	*/






	// $a = 1;
	// $b = 0;

	// $a AND $b => false

	// echo ($a AND $b) . '<br>';
	// var_dump($a AND $b);

	/*$a OR $b => True*/
	// var_dump($a OR $b);


	// $a XOR $b => TRUE
	// var_dump($a OR $b);





	// $a = 1;
	// $b = 1;

	// $a and $b => true

	// echo ($a AND $b) . '<br>';
	// var_dump($a AND $b);


	/*$a OR $b => True*/
	// var_dump($a OR $b);

	// $a XOR $b => FALSE
	// var_dump($a OR $b);



	// $a = 0;
	// $b = 1;
	
	/* $a and $b => false*/
	// var_dump($a AND $ b);

	/*$a OR $b => True*/
	// var_dump($a OR $b);




	// $a XOR $b => TRUE
	// var_dump($a OR $b);

	// var_dump(!$b); Not $b /*FALSE*/



	// $a = 0;
	// $b = 0;

	/* $a and $b => false*/
	// var_dump($a AND $ b);

	/*$a OR $b => FALSE*/
	// var_dump($a OR $b);



	// $a XOR $b => FALSE
	// var_dump($a OR $b);


	// var_dump(!$a); Not $a /*TRUE*/





	/*BMI calculator*/

	// bmi = mass (kg) / height * height(m)


	// result: 

		// <16 -> Severe thinness
		// 16 - 17 -> moderate thinness
		// 17 - 18.5 -> mild thinness
		// 18.5 - 25 -> normal
		// 25 - 30 -> overweight 
		// 30 - 35 -> obese class 1
		// 35 - 40 -> obese class 2
		//  > 40 -> obese class 3

	// $mass = 51.71;
	// $height = 1.524;

	// $bmi = $mass / ($height * $height);

	// echo 'Your BMI is ' . $bmi. '<br>';

	// if ($bmi < 16)
	// 	echo 'Result: Severe thinness';
	// else if ($bmi >= 16 AND $bmi <= 17)
	// 	echo 'Result: Moderate thinness';
	// else if ($bmi >= 17 AND $bmi <= 18.5)
	// 	echo 'Result: Mild thinness';
	// else if ($bmi >= 18.5 AND $bmi <= 25)
	// 	echo 'Result: Normal';
	// else if ($bmi >= 25 AND $bmi <= 30)
	// 	echo 'Result: Overweight';
	// else if ($bmi >= 30 AND $bmi <= 35)
	// 	echo 'Result: Obese Class 1';
	// else if ($bmi >= 35 AND $bmi <= 40)
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
	// 	case $bmi >= 17 AND $bmi <= 18.5:
	// 		echo 'Result: Mild thinness';
	// 		break;
	// 	case $bmi >= 18.5 AND $bmi <= 25:
	// 		echo 'Result: Normal';
	// 		break;
	// 	case $bmi >= 25 AND $bmi <= 30:
	// 		echo 'Result: Overweight';
	// 		break;
	// 	case $bmi >= 30 AND $bmi <= 35:
	// 		echo 'Result: Obese Class 1';
	// 		break;
	// 	case $bmi >= 35 AND $bmi <= 40:
	// 		echo 'Result: Obese Class 2';
	// 		break;
	// 	case $bmi >40:
	// 		echo 'Result: Obese Class 3';
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }

	//
	//
	//LOOP
	//WHILE LOOP
	//
	//

	// $number = 1;

	// while ($number <=10) {
	// 	echo $number . " ";
	// 	$number = $number +1;
	// }

	// Do While loop

	// $count = 0;
	// do {
	// 	echo $count . ' ';
	// 	// $count +=1;
	// 	// $count ++;
	// 	$count = $count + 2;
	// } while ($count <= 12);

	// FOR LOOP

	$name = 'Juan Dela Cruz';

	for ($counter=1; $counter <= 10 ; $counter+= 1) { 
		echo $name . '<br>';
	}


	 ?>

</body>
</html>