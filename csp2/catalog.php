<?php 

session_start();

function getTitle() {
	echo 'MERCHANDISE | Fantasy Hoops Basketball League';
}

include 'partials/head.php';

require 'connect.php';

$sql = "SELECT * FROM products";
$items = mysqli_query($conn, $sql);

$sql1 = "SELECT description FROM categories";
$categories = mysqli_query($conn, $sql1);

$result = array();

if (isset($_GET['search']) && $_GET['category'] !== 'All') {
	$cat = $_GET['category'];

	foreach ($items as $item) {
		if ($item['category'] === $cat) {
			array_push($result, $item);
		}
	}
} else {
	$result = $items;
}
?>

</head>
<body>


