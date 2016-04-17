<?php 

 ?>
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
 	<h2>Add a new product</h2>
 	<form action="/Products/create" method="post">
 		<label for="product_name">Name</label>
 		<input type="text" id="product_name" placeholder="Product Name" name="name" />
 		<label for="product_name">Description</label>
 		<input type="text" id="product_desc" placeholder="Product Description" name="description" />
 		<?php if(isset($errors['noprice'])) { ?>
 					<p class="warning"><?= $errors['noprice']; ?></p>
		<?php 	}
		 	if(isset($errors['numeric'])){ ?>
		 		<p class="warning"><?= $errors['numeric']; ?></p>
		 <?php	}	?>
 		<label for="product_name">Price</label>
 		<input type="text" id="product_price" placeholder="Example: 10.50" name="price" />
 		<input class="button" type="submit" value="Create" />
 	</form>
 	<a class="blink" href="<?= base_url(); ?>">Go back</a>
 </body>
 </html>