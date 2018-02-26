<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devie-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>PHP Programming - Syntax, Printing, and Variables</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>

	<?php

	/*
	 * Activity 1
	 *
	 * Create an array variable with the following items 'stars', 'shine', 'yellow'.
	 * Access the items from the array to display the lyrics below:
	 *
	 * "Look at the stars, look how they shine for you, and everything you do.
	 * Yeah, they were all yellow."
	 */

	$lyrics = array('stars', 'shine', 'yellow');

	// echo "Look at the $lyrics[0], look how they $lyrics[1] for you, and everything you do.<br>";
	// echo "Yeah, they were all $lyrics[2].";

	/*
	 * Activity 2
	 *
	 * Using the previous array you created, display this list.
	 *
	 *		- Stars
	 *		- Shine
	 *		- Yellow
	 */

	//sol'n #1 - Embed php codes on html elements
?>
<!-- 	<ul>
		<li><?php echo $lyrics[0]; ?></li>
		<li><?php echo $lyrics[1]; ?></li>
		<li><?php echo $lyrics[2]; ?></li>
	</ul> -->

<?php

	//sol'n #2 - create DOM within PHP

	// echo "
	// 	<ul>
	// 		<li>$lyrics[0]</li>
	// 		<li>$lyrics[1]</li>
	// 		<li>$lyrics[2]</li>
	// 	</ul>
	// ";

	// echo "<ul>";
	// echo "<li>$lyrics[0]</li>";
	// echo "<li>$lyrics[1]</li>";
	// echo "<li>$lyrics[2]</li>";
	// echo "</ul>";

	// Activity 3

	$fnames = array('Steph', 'Russel', 'LeBron');
	$lnames = array('Curry', 'Westbrook', 'James');
	$teams = array('Warriors', 'Thunders', 'Cavaliers');
	$jerseys = array('30', '0', '23');

	// echo "Player: $fnames[0] $lnames[0]<br>";
	// echo "Team: $teams[0]<br>";
	// echo "Jersey: $jerseys[0]<br><br>";
	// echo "Player: $fnames[1] $lnames[1]<br>";
	// echo "Team: $teams[1]<br>";
	// echo "Jersey: $jerseys[1]<br><br>";
	// echo "Player: $fnames[2] $lnames[2]<br>";
	// echo "Team: $teams[2]<br>";
	// echo "Jersey: $jerseys[2]<br><br>";

	// Activity 4

	



	?>

	<table>
		<tr>
			<th>Players </th>
			<th>Team </th>
			<th>Jersey </th>
		</tr>

		<?php
			for($x=0;$x<=2;$x++) {
				echo "
					<tr>
						<td>$fnames[$x] $lnames[$x] </td>
						<td>$teams[$x] </td>
						<td>$jerseys[$x] </td>
					</tr>
				";

			}
			?>

	</table>

	<?php
			echo "
			<br>
			<table>
				<thead>
					<th>Player</th>
					<th>Team</th>
					<th>Jersey</th>
				</thead>
				<tbody>
					<tr>
						<td>$fnames[0] $lnames[0]</td>
						<td>$teams[0]</td>
						<td>$jerseys[0]</td>
					</tr>
					<tr>
						<td>$fnames[1] $lnames[1]</td>
						<td>$teams[1]</td>
						<td>$jerseys[1]</td>
					</tr>
					<tr>
						<td>$fnames[2] $lnames[2]</td>
						<td>$teams[2]</td>
						<td>$jerseys[2]</td>
					</tr>
				</tbody>
			</table>
		";
		?>


</body>
</html>