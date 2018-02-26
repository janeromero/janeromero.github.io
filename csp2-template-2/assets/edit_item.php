<?php

$id = $_GET['id'];

// successful processing

$file = file_get_contents('items.json');
$items = json_decode($file, true);

echo '
<div class="form-group">
	<label>Product Name</label>
	<input name="name" class="form-control" type="text" value="'.$items[$id]['name'].'">

	<label>Description</label>
	<input name="description" class="form-control" type="text" value="'.$items[$id]['description'].'">

	<label>Image</label>
	<input type="file" class="form-control" name="image">

	<label>Price</label>
	<input type="text" name="price" id="price" placeholder="PHP 0.00" class="form-control" value="'.$items[$id]['price'].'">
';

	$categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4'];
	echo '
	<label>Category</label>
	<select class="form-control" name="category">';
		foreach ($categories as $category) {
			if ($items[$id]['category'] === $category)
				echo '<option selected>'.$category.'</option>';
			else
				echo '<option>'.$category.'</option>';
		}
	echo'
	</select>
</div>';