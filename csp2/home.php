<?php 

session_start();

if (!isset($_SESSION['current_user']))
	header('location: user_login.php');

function getTitle() {
	echo 'HOME | Fantasy Hoops Basketball League';	
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

		


<div class="wrapper">
	<div class="container-fluid carousel">
		<div class="row">
			<div class="col-lg-4">
				<?php

					if (isset($_SESSION['current_user'])) {
					echo '<h2>Welcome ' . $_SESSION['current_user'] . ' (' . $_SESSION['role'] . ') !</h2>';
					}

				?>

				<div><img class="img-responsive" src="assets/images/logoclear.png"></div>
			</div> <!-- /.col-lg-4 -->

			<div class="col-lg-8">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
 				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				    <div class="item active">
				      <img class="imgcar" src="assets/images/cover.jpg" alt="cover">
				    </div>

				    <div class="item">
				      <img class="imgcar" src="assets/images/cover2.jpg" alt="cover2">
				    </div>

				    <div class="item">
				      <img class="imgcar" src="assets/images/cover3.jpg" alt="cover3">
				    </div>
 

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div> <!-- /.carousel -->
			</div> <!-- /.col-lg-8 -->
		</div> <!-- /.row -->
	</div> <!-- /.container-fluid -->
	
</div> <!-- /.wrapper -->


	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>
