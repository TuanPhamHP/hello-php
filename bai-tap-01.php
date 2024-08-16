<?php
require './Models/User.php';

// Tạo đối tượng User
$user = new User("Alice", 30);
// Sử dụng đối tượng User

?> 
<!DOCTYPE html>
<html>


<body>
 
<h1>
<?php 
$models = [
	[
			"id" => 1,
			"name" => "Nguyễn Văn A",
			"gender" => "male",
			"score" => 85.6,
			"yob" => 2001
	],
	[
			"id" => 2,
			"name" => "Trần Thị B",
			"gender" => "female",
			"score" => 78.4,
			"yob" => 2002
	],
	[
			"id" => 3,
			"name" => "Lê Văn C",
			"gender" => "male",
			"score" => 92.1,
			"yob" => 2003
	],
	[
			"id" => 4,
			"name" => "Phạm Thị D",
			"gender" => "female",
			"score" => 88.9,
			"yob" => 2004
	],
	[
			"id" => 5,
			"name" => "Hoàng Văn E",
			"gender" => "male",
			"score" => 74.3,
			"yob" => 2005
	]
];
$avgScore = array_reduce($models, fn($total, $item) => $total + $item['score'], 0) / count($models);
// $sum = array_reduce($model, fn($total, $item) => $total + $item['score'], 0);
echo "Điểm số trung bình là $avgScore";
  ?>  
	<h1>
		Danh sách học sinh có điểm cao hơn trung bình cộng là:
	</h1>
	<?php 
	$topHigherScores = array_filter($models, function ($item) use ($avgScore) {
		return $item['score'] > $avgScore;
	});

	foreach ($topHigherScores as $student) {
	?>
	<div>
	
		<p>Họ và tên: <?php echo  $student['name'] ?></p>
		<p>Điểm số: <?php echo  $student['score'] ?></p>
	</div>
<?php 
}
function isHigher($student){
	global $avgScore;
	$msg = $student['score'] > $avgScore ? $student['name']." có điểm cao hơn trung bình": $student['name']." có điểm thấp hơn trung bình";
	echo $msg;
};
isHigher($models['0']);
?>
	
</h1>

</body>

</html>