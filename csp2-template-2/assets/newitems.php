<?php

$productname = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$description = $_POST['description'];
$category = $_POST['category'];

// echo $userName . ' ' . $passWord . ' ' . $email;

$file = file_get_contents('items.json');
$products = json_decode($file, true);

$newProduct = array(
	'name' => $productName,
	'price' => $price,
	'image' => 'assets/img/',
	'description' => $description,
	'category' => $category
);
	
array_push($products, $newProduct);

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($products, JSON_PRETTY_PRINT));
fclose($jsonFile);

header('location: ../catalog.php');