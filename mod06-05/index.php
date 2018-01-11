<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
  	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

  	<style type="text/css">
  		.box{
  			border:1px solid black;
  			padding: 10px;
  			border-collapse: collapse;
  			display: inline-block;
  		}
  	</style>

	<title>PHP Programming - Expressions</title>
	
</head>
<body>

	<?php 

	// Activity 1

	// for ($number= 1; $number <=9 ; $number++) { 
	// 	echo $number . "-";
	// 	if ($number = 10) {
	// 		echo $number;
	// 	}
	// }

	// for ($number= 1; $number <=10 ; $number++) { 
	// 	echo $number;
	// 	if ($number < 10)
	// 		echo "-";
	
	// }

	// ACTIVITY 2

	
	// for ($y=0; $y < 10; $y++) { 
	// 	for ($x=0; $x <10 ; $x++) { 
	// 		echo "* ";
	// 	};	
	// 	echo " <br>";
	// }


	// for ($y=1; $y <= 10; $y++) { 
	// 	for ($x=1; $x <=10 ; $x++) { 
			
	// 		echo '<span class="box">' . $x * $y . '</span>';
	// 	};
	// 	echo " <br>";
	// }

	// for ($y=1; $y <= 10; $y++) { 
	// 	for ($x=$y; $x <= 10 ; $x++) { 
	// 		echo "$x ";
	// 	};	
	// 	echo " <br>";
	// }

	//ACTIVITY 6

	for ($y=1; $y <=50 ; $y++) { 
		if ($y % 3==0 && $y % 5 == 0){
			echo $y . 'FizzBuzz';
			echo " <br>";
		}
		elseif ($y % 3==0) {
			echo $y . 'Fizz';
			echo " <br>";
		}
		elseif ($y % 5 ==0){
			echo $y . 'Buzz';
			echo " <br>";
		}

	
	}
	 ?>

</body>
</html>