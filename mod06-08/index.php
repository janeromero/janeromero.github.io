<?php
require_once 'assets/lib/twelve_days.php'

?>

<!DOCTYPE html>
<html lang="en">

	<meta charset="utf-8">

	<meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

<head>
	<title><?php echo getTitle(); ?> Lyrics</title>


</head>
<body>

	<?php 
	echo "<h1> 12 Days of Christmas </h1>";

	?>
	<div id="lyrics">
	<?php

	echo getLyrics();

	?>
	</div>

	<button id="show" onclick="showLyrics()">Show</button>



<script>

	// function showLyrics() {
	// 	document.getElementById("lyrics").style.visibility = visible;
	// }

</script>

</body>
</html>