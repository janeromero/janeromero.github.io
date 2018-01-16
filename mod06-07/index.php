<?php 


	include 'assets/lib/hello_world.php'; /*Including or accessing an external file through php*/

	// can also be coded as include_once; <--- can be use only once 

	require 'assets/lib/a_simple_require_file.php';
	// Can also be coded as require_once; <----- only once only once 

	/*prints a 2x3 table*/

	function printTable($rows, $cols) {
			echo "<table border=1>";

			for ($i=0; $i < $rows; $i++){
				echo "<tr>";

				for ($j=0; $j < $cols; $j++){
					echo "<td> Content </td>";
				}

				echo "</tr>";
			}

				echo "</table>";


	};

		echo "<hr>";

		function add($a, $b){
			$sum = $a + $b;
			return $sum;
		}					/*if here more than 2 parameters create another function*/

								/*function should only have one fuction create another function if there's more than 2 function*/

		$number1 = 20;
		$number2 = 12;
		$total = add($number1,$number2); /*<----- variables, function can use variables, values, arrays*/


		function longdate($timestamp)
		{

			return date("l F jS Y", $timestamp);
		}

		function fix_names($n1, $n2, $n3)
			{

				$n1 = ucfirst(strtolower($n1));
				$n2 = ucfirst(strtolower($n2));
				$n3 = ucfirst(strtolower($n3));

				return $n1 . " " . $n2 . " " . $n3;
			}



	?> 

<?php

	$a1 = "BILLY"; $a2 = "peejay"; $a3 = "aLLAn";

	// function fix_names2()
	// 	{

	// 		global $a3; ucfirst(strtolower($a3));
	// 		global $a2; ucfirst(strtolower($a2));
	// 		global $a1;	ucfirst(strtolower($a1));
	// 	}


	function area($length, $width){
			
			return $length*$width;


	}

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<title>Tables for PHP</title>

<head> </head>
<body>


<?php 

printTable(1,1); /*<------ Value*/

	echo "<br>";

	printTable(3,5);

	echo "<hr>";


	echo "<h2>Total is $total </h2>";

	echo "<br>";

	echo longdate(time());

	echo "<br>";
	echo "<br>";

	echo fix_names("BILLY", "peejay", "AllaN"); /*<----ucfirstname fixes the format of the word such as capitalizations*/


?>

<hr>

<?php


	// echo $a1 . " " . $a2 . " " . $a3 . "<br>";
	// fix_names2();
	// echo $a1 . " " . $a2 . " " . $a3;

	echo area(5,10); /*AREA*/




?>

<?php

	iAmRequired();


?>

	

</body>
</html>