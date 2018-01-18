<?php 

function getTitle() {
	echo 'Careers | Welcome to Beeer App';
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
		<h1>Careers</h1>
	</main> <!-- /.wrapper -->

	<footer>

		<?php 
			include 'partials/footer.php';
		 ?>
		
	</footer>

	

<?php 

include 'partials/foot.php';

 ?>