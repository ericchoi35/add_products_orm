<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Products ORM</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
</head>
<body>
	<div class="container">
		<h2>Add a product:</h2>
		<div class='row'>
			<div class='col-sm-4'>

				<form role="form" action='/products/create' method='post'>
				  	<div class="form-group">
				    	<label>Product Name</label>
				    	<input type="text" name="name" class="form-control" placeholder="Enter product name">
				  	</div>
				  	<div class="form-group">
				    	<label>Price ($)</label>
				    	<input type="text" name="price" class="form-control" placeholder="Enter product price">
				  	</div>
				  	<div class="form-group">
				    	<label>Description</label>
				    	<input type="text" name="description" class="form-control" placeholder="Enter product description">
				  	</div>
				  	<button type="submit" class="btn btn-default pull-right">Add Product</button>
				</form>
				</br>
			</div>
		</div>
	</br>
		<div class='row'>
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Price</th>
						<th>Description</th>
						<th>Date Added</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
<?php 			foreach($products as $product)
				{	?>
					<tr>
						<td><?= $product['name'] ?></td>	
						<td>$<?= $product['price'] ?></td>	
						<td><?= $product['description'] ?></td>	
						<td><?= date("F j, Y", strtotime($product['created_at'])) ?></td>	
						<td>
							<form action='/products/destroy' method='post'>
								<input type='hidden' name='id' value="<?= $product['id'] ?>">
								<input type='submit' value='Delete Product' class='btn btn-default'>
							</form>
						</td>	
					</tr>	
<?php			}	?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>