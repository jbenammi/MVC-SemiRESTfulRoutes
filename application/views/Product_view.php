<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jonathan Ben-Ammi">
	<title>Product View</title>
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

</head>
<body>
	<h2>Product <?= $product_info['id']; ?></h2>
	<table id="product_view">
		<tr>
			<td class="label">Name:</td>
			<td><?= $product_info['name']; ?></td>
		</tr>
		<tr>
			<td class="label">Description:</td>
			<td><?= $product_info['description']; ?></td>
		</tr>
		<tr>
			<td class="label">Price:</td>
			<td><?= $product_info['price']; ?></td>
		</tr>
	</table>
	<p class="blink"><a href="/Products/edit/<?= $product_info['id']; ?>">Edit</a> | <a href="<?= base_url();?>">Back</a></p>
</body>
</html>