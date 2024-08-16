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
	$products = [
		[
			"id" => 1,
			"product_name" => "Toyota Camry",
			"description" => "Toyota Camry là dòng sedan hạng trung với thiết kế hiện đại, nội thất tiện nghi và động cơ mạnh mẽ.",
			"images" => "camry.jpg",
			"regular_price" => 40000,
			"sale_price" => 38000,
			"brand_id" => 1,
			"category_id" => 1,
		],
		[
			"id" => 2,
			"product_name" => "Honda Civic",
			"description" => "Honda Civic là mẫu xe sedan nhỏ gọn, tiết kiệm nhiên liệu, phù hợp cho việc di chuyển trong thành phố.",
			"images" => "civic.jpg",
			"regular_price" => 25000,
			"sale_price" => 23000,
			"brand_id" => 2,
			"category_id" => 1,
		],
		[
			"id" => 3,
			"product_name" => "Ford Ranger",
			"description" => "Ford Ranger là xe bán tải mạnh mẽ, có khả năng vượt địa hình tốt, phù hợp cho cả công việc và giải trí.",
			"images" => "ranger.jpg",
			"regular_price" => 35000,
			"sale_price" => 33000,
			"brand_id" => 3,
			"category_id" => 2,
		],
		[
			"id" => 4,
			"product_name" => "Chevrolet Silverado",
			"description" => "Chevrolet Silverado là dòng xe bán tải cỡ lớn với khả năng vận hành mạnh mẽ và không gian rộng rãi.",
			"images" => "silverado.jpg",
			"regular_price" => 45000,
			"sale_price" => 42000,
			"brand_id" => 4,
			"category_id" => 2,
		],
		[
			"id" => 5,
			"product_name" => "BMW X5",
			"description" => "BMW X5 là dòng SUV cao cấp với thiết kế thể thao, động cơ mạnh mẽ và nhiều tính năng hiện đại.",
			"images" => "x5.jpg",
			"regular_price" => 60000,
			"sale_price" => 58000,
			"brand_id" => 5,
			"category_id" => 3,
		],
		[
			"id" => 6,
			"product_name" => "Audi Q7",
			"description" => "Audi Q7 là dòng SUV hạng sang với nội thất sang trọng, công nghệ tiên tiến và khả năng vận hành vượt trội.",
			"images" => "q7.jpg",
			"regular_price" => 65000,
			"sale_price" => 63000,
			"brand_id" => 6,
			"category_id" => 3,
		],
		[
			"id" => 7,
			"product_name" => "Mercedes-Benz C-Class",
			"description" => "Mercedes-Benz C-Class là dòng sedan hạng sang với thiết kế lịch lãm, động cơ mạnh mẽ và nhiều tính năng an toàn.",
			"images" => "c_class.jpg",
			"regular_price" => 50000,
			"sale_price" => 48000,
			"brand_id" => 7,
			"category_id" => 1,
		],
		[
			"id" => 8,
			"product_name" => "Lexus RX",
			"description" => "Lexus RX là dòng SUV hạng sang với thiết kế đẹp mắt, nội thất cao cấp và động cơ mạnh mẽ.",
			"images" => "rx.jpg",
			"regular_price" => 70000,
			"sale_price" => 68000,
			"brand_id" => 8,
			"category_id" => 3,
		]
	];
	$filteredProducts = $products;
	if (isset($_GET) && $_GET['search']) {
		$filteredProducts = array_filter($filteredProducts, function ($item) {
			return str_contains($item['product_name'], $_GET['search']);
		});
	}
	?>
	<div class="container">

		<div>
			<h3 class="py-2">Danh sách sản phẩm:</h3>
			<form action="./bai-tap-02.php" method="get">
				<div class=" my-3">
					<label for="search"> Tìm kiếm:</label>
					<input type="text" class="form-control" id="search" placeholder="Tìm kiếm theo tên ..." name='search'
						value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''  ?>">
				</div>
			</form>
			<div class="row">
				<?php
				foreach ($filteredProducts as $product) {
					include './components/productCard.php';
				};
				?>
			</div>


		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>