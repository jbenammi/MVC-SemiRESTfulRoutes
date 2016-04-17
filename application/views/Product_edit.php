<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jonathan Ben-Ammi">
	<title></title>
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
 	<h2>Edit Product <?= $product_info['id']; ?></h2>
 	<form action="/Products/update" method="post">
 		<label for="product_name">Name</label>
 		<input type="text" id="product_name" placeholder="Product Name" value="<?= $product_info['name']; ?>" name="name" />
 		<label for="product_name">Description</label>
 		<input type="text" id="product_desc" placeholder="Product Description" value="<?= $product_info['description']; ?>" name="description" />
 		<?php if(isset($errors['noprice'])) { ?>
 					<p class="warning"><?= $errors['noprice']; ?></p>
		<?php 	}
		 	if(isset($errors['numeric'])){ ?>
		 		<p class="warning"><?= $errors['numeric']; ?></p>
		 <?php	}	?>
 		<label for="product_name">Price</label>
 		<input type="text" id="product_price" placeholder="Example: 10.50" value="<?= $product_info['price']; ?>" name="price" />
 		<input type="hidden" value="<?= $product_info['id']; ?>" name="id" />
 		<input class="button" type="submit" value="Update" />
 	</form>
 	<p class="blink"><a href="/Products/show/<?= $product_info['id']; ?>">Show</a> | <a href="<?= base_url(); ?>">Back</a></p>
</body>
</html>