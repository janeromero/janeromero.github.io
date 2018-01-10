<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
  	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<title>PHP Programming - Syntax, Printing and Variables</title>
</head>
<body>

	<?php 
		//Activity 1

		$words = array('stars', 'shine', 'yellow');

		echo "Look at the $words[0], look how they $words[1] for you, and everything you do. <br>";
		echo "Yeah, they were all $words[2].";

		//Activity 2

		echo "<ul>
			<li>$words[0]</li>
			<li>$words[1]</li>
			<li>$words[2]</li></ul>";

		//Activity 3

		$firstnames = array('Stephen', 'Russell', 'LeBron');
		$lastnames = array('Curry', 'Westbrook', 'James');
		$teams = array('Warriors', 'Thunders', 'Cavaliers');
		$jerseys = array('30', '0', '23');


		echo "<p>Player: $firstnames[0] $lastnames[0]<br>";
		echo "Team: $teams[0]<br>";
		echo "Jersey: $jerseys[0]<br></p>";

		echo "<p>Player: $firstnames[1] $lastnames[1]<br>";
		echo "Team: $teams[1]<br>";
		echo "Jersey: $jerseys[1]<br></p>";

		echo "<p>Player: $firstnames[2] $lastnames[2]<br>";
		echo "Team: $teams[2]<br>";
		echo "Jersey: $jerseys[2]<br></p>";

		//Avtivity 4

		echo "<table>
			<tr>
				<th>Player</th>
				<th>Team</th>
				<th>Jersey</th>
			</tr>

			<tr>
				<td>$firstnames[0] $lastnames[0]</td>
				<td>$teams[0]</td>
				<td>$jerseys[0]</td>
			</tr>

			<tr>
				<td>$firstnames[1] $lastnames[1]</td>
				<td>$teams[1]</td>
				<td>$jerseys[1]</td>
			</tr>

			<tr>
				<td>$firstnames[2] $lastnames[2]</td>
				<td>$teams[2]</td>
				<td>$jerseys[2]</td>
			</tr>

			</table>

			";

	 ?>

	 	<table>
	 		<tr>
	 			<th>Player</th>
	 			<th>Team</th>
	 			<th>Jersey</th>
	 		</tr>

	 		<?php 
	 			for($x=0; $x<=2; $x++);
	 				echo "
	 					<tr>
	 						<td>$firstnames[$x] $lastnames[$x]</td>
	 						<td>$teams[$x]</td>
	 						<td>$jerseys[$x]</td>
	 					</tr>
	 					";
	 		 ?>
	 	</table>

</body>
</html>