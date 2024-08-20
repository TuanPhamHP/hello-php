<?php
require_once('./database/db_connect.php');
require_once('./database/create_products_table.php');
require_once './controllers/ProductController.php';

$productController = new ProductController($conn);
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<?php
	$_SESSION['user'] = ['name' => 'Anh Tuấn Phạm'];
	include('./components/header.php');
	?>
	<div class="container">
		<?php include './components/createTask.php' ?>
		<div>
			<h3>Danh sách:</h3>
			<div class="row">
				<?php

				$products = $productController->getAll();
				foreach ($products as $product) {
					include './components/productCard.php';
				};

				?>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>