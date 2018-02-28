<?php 

function getTitle() {
	echo 'User Login | Fantasy Hoops Basketball League';	
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

		
	<main class="wrapper">
		
		<h1>Register Page</h1>
		
		<form id="registerForm" method="POST" action="assets/registration.php" class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Enter new username" class="form-control" required>

			<label for="username">First Name</label>
			<input type="text" name="user_firstname" id="fname" placeholder="Enter First Name" class="form-control" required>

			<label for="username">Last Name</label>
			<input type="text" name="user_lastname" id="lname" placeholder="Enter Last Name" class="form-control" required>

			<label for="password">Password</label>
			<input type="password" name="user_password" id="password" placeholder="Enter new password" class="form-control" required>

			<label for="confirmPassword">Confirm Password</label>
			<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter password again" class="form-control" required>

			<label for="email">Email Address</label>
			<input type="email" name="email" id="email" placeholder="email@domain.com" class="form-control" required>

			<label for="username">Contact Number</label>
			<input type="text" name="contact_no" id="address" placeholder="Enter Contact Number" class="form-control" required>

			<label for="username">Delivery Address</label>
			<input type="text" name="address" id="address" placeholder="Enter Delivery Address" class="form-control" required>

			<input type="submit" name="submit" id="submit" value="Register" class="btn btn-primary">
		</form>


	</main>


	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>