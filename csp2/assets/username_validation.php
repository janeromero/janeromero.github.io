<?php 

require '../connect.php';

if (isset($_POST['username'])) {
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo '<span class="red-message">not taken</span>';
		return false;
	}
	else {
		echo '<span class="green-message">taken</span>';
		return false;
	}
} else {
	echo 'username';
}



?>