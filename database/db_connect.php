<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hello_php";
$port = 3306;

// Tạo kết nối đến MySQL mà không chọn cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, null, $port);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

// Tạo cơ sở dữ liệu nếu chưa tồn tại
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Cơ sở dữ liệu '$dbname' đã được tạo hoặc đã tồn tại.<br>";
} else {
  die("Lỗi khi tạo cơ sở dữ liệu: " . $conn->error . "<br>");
}

// Chọn cơ sở dữ liệu để thực hiện các truy vấn khác
$conn->select_db($dbname);
