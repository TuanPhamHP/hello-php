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
			<h3>Danh sách công việc:</h3>

			<?php
			$tasks = [
				['title' => 'Công việc 1', 'content' => 'Lorem ispum'],
				['title' => 'Công việc 2', 'content' => 'is a nom nom'],
			];
			foreach ($tasks as $task) {
				# code...
				$me = 'Phạm';
				include './components/task.php';
			};

			?>

		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>