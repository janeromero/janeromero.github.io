<?php

session_start();


function getTitle() {
	echo 'Catalog';
}

include 'partials/head.php';

// import items.json file
// $file = file_get_contents('assets/items.json');

// Create database connection
require 'connect.php';

// $items = json_decode($file, true);
$sql = "SELECT * FROM items";
$items = mysqli_query($conn, $sql);  // $conn is from connect.php

// Retrieve all categories
// $categories = array_column($items, 'category');
// var_export($categories);
$sql1 = "SELECT description FROM categories";
$categories = mysqli_query($conn, $sql1);

// Filter unique entry of category
// $categories = array_unique($categories);
// var_export($categories);

// Sort categories in ascending order
// sort($categories);

$result = array();  // Empty array of items

// Category chosen for filter
if (isset($_GET['search']) && $_GET['category'] !== 'All') {
	$cat = $_GET['category'];
	// echo $cat;

	// Filter items based on category chosen
	foreach ($items as $item) {
		if ($item['category'] === $cat) {
			array_push($result, $item);
		}
	}

} else {
	// Show all items
	$result = $items;
}

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main id="catalogWrapper" class="wrapper">

		<h1>Catalog Page</h1>

		<!-- go to add new item page -->
		<a href="create_new_item.php">
			<button class="btn btn-primary">Add New Item</button>
		</a>

		<form method="GET">
			<select name="category">
				<option>All</option>
				<?php

				// foreach ($categories as $category) {
				while ($category = mysqli_fetch_assoc($categories)) {
					extract($category);

					echo '<option>' . $description . '</option>';
					
					// if ($category === $_GET['category']) {
					// 	echo '<option selected>'.$category.'</option>';
					// } else {
					// 	echo '<option>'.$category.'</option>';
					// }
				}

				?>
			</select>
			<button type="submit" name="search">Search</button>
		</form>
			
		<div class="items-wrapper">

			<?php

			// foreach ($result as $key => $item) {
			while ($item = mysqli_fetch_assoc($items)) {
				extract($item);

				echo '
					<div class="item-parent-container form-group">
						<a href="item.php?id='.$id.'">
						<div class="item-container">
							<h3>'.$product_name.'</h3>
							<img src="'.$image.'" alt="Mock data">
							<p>PHP '.$price.'</p>
							<p>'.$description.'</p>
						</div>  <!-- /.item-container -->
						</a>
						<input id="itemQuantity'.$id.'" type="number" value="0" min="0">
						<button class="btn btn-primary form-control" onclick="addToCart('.$id.')">Add to Cart</button>
					</div>
				';
			}

			?>
		</div>  <!-- /.items-wrapper -->
		
	</main>  <!-- /.wrapper -->

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

	<?php

	include 'partials/foot.php';

	?>

	<script type="text/javascript">
		
		function addToCart(itemId) {
			// console.log(itemId);
			var id = itemId;

			// retrieve value of item quantity
			var quantity = $('#itemQuantity' + id).val();
			// console.log(quantity);

			// create a post request to update session cart variable
			$.post('assets/add_to_cart.php',
				{
					item_id: id,
					item_quantity: quantity 
				},
				function(data, status) {
					// console.log(data);
					$('a[href="cart.php"]').html(data);
				});

		}
	</script>

</body>
</html>