<?php 

function getTitle() {
	echo 'Statistics | Fantasy Hoops Basketball League';	
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

		
	<div class="container-fluid carousel">
		<div class="row">
			<div class="col-lg-12">
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
			</div> <!-- /.col-lg-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container-fluid -->

	<div class="wrapper">

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<h1>Game Statistics</h1>

				<p>February 10, 2018</p>
				<img class="img-responsive" src="assets/images/feb10.jpg">
			</div>

			<div class="col-lg-4">
				<div>
					<img class="img-responsive" src="assets/images/logoclear.png">
				</div>


			</div>
		</div>
	</div>
	
	</div> <!-- /.wrapper -->


	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>
