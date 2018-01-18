<?php 

function getTitle() {
	echo 'Beer | Welcome to Beeer App';
}

include 'partials/head.php';
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