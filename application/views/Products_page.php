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
 	<h2>Products</h2>
 	<table>
 		<thead>
 			<th>Item</th>
 			<th>Description</th>
 			<th>Price</th>
 			<th>Actions</th>
 		</thead>
 		<tbody>
 			<?php for ($i = 0; $i < count($product_list); $i++){ ?>
 			<tr>
 				<?php foreach ($product_list[$i] as $key => $value) {
 					if ($key !== 'id'){ 
 						if ($key == 'price') {?>
		 					<td>$ <?= $value; ?></td><?php
		 				}
	 					else { ?>
							<td><?= $value; ?></td><?php
	 					}
	 				}
	 			} ?>
	 			<td><a href="/Products/show/<?= $product_list[$i]['id']; ?>">Show</a> | <a href="/Products/edit/<?= $product_list[$i]['id']; ?>">Edit</a> | <a href="/Products/destroy/<?= $product_list[$i]['id']; ?>"><button>Remove</button></a></td>
 			</tr><?php 
 			} ?>
 		</tbody>
 	</table>
 	<a class="blink" href="/Products/new_product">Add a new product</a>
 </body>
 </html>