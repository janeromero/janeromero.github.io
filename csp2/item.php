<?php 

session_start();

require 'connect.php';

if (isset($_SESSION['current_user'])) {
	if ($_SESSION['role'] != 'admin')
		header('location: home.php');
}

function getTitle() {
	echo 'ITEM | Fantasy Hoops Basketball League';	
}

include 'partials/head.php';


 ?>

</head>
</body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
		<button class="btn btn-default">Back</button>
		</a>
		<button class="btn btn-primary">Edit</button>
		<button class="btn btn-danger">Delete</button>
		
	<table class="data-table">
		<?php 
		$id = $_GET['id'];

		$sql = "SELECT * FROM products p JOIN categories c ON p.category_id = c.id WHERE p.id = id";
		$result = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_array($result);
		?>
				<tr>
					<td>Product Name</td>
					<td> <?php echo $row[$id]['product_name']; ?></td>
				</tr>

				<tr>
					<td>Image</td>
					<td><img src="<?php echo $row[$id]['image'];?>"</td>
				</tr>

				<tr>
					<td>Color</td>
					<td><?php echo $row[$id]['color']; ?></td>
				</tr>

				<tr>
					<td>Description</td>
					<td> <?php echo $row[$id]['description'] ?></td>
				</tr>

				<tr>
					<td>Price</td>
					<td><?php echo $row[$id]['price']; ?></td>
				</tr>

				<tr>
					<td>Category</td>
					<td> <?php echo $row[$id]['description'];?></td>
				</tr>
				
	</table>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php';

		include 'partials/foot.php';

	?>

</body>
</html>
