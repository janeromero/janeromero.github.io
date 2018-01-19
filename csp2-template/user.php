<?php 

session_start();

function getTitle() {
	echo 'User | Welcome to Beeer App';
}

include 'partials/head.php';

$id = $_GET['id'];

$file - file_get_contents('assets/users.json');
$users = json_decode($file, true);

$user = $users[$id];
 ?>
</head>

<body>



	<header>
	<?php

	require 'partials/main_navigation.php';
	
	?>
	</header>

	<main class="wrapper">
		<h1>About</h1>
	</main> <!-- /.wrapper -->

	<footer>

		<?php 
			include 'partials/footer.php';
		 ?>
		
	</footer>

	

<?php 

include 'partials/foot.php';

 ?>