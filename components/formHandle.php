<?php
session_start();
require_once '../database/db_connect.php';
require_once '../controllers/ProductController.php';

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Khởi tạo Controller
$productController = new ProductController($conn);

// Biến để lưu trữ lỗi và dữ liệu nhập
$errors = [];
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data['product_name'] = trim($_POST['product_name']);
  $data['description'] = trim($_POST['description']);

  // Lưu tất cả các dữ liệu từ form
  foreach ($_POST as $key => $value) {
    $data[$key] = trim($value);
  }

  // Gọi phương thức create() từ Controller
  $response = $productController->create($data);

  if ($response['success']) {
    $_SESSION['success_message'] = "Sản phẩm đã được lưu thành công!";
    // Xóa session dữ liệu và lỗi
    unset($_SESSION['form_data']);
    unset($_SESSION['form_errors']);
    header('Location: index.php');
    exit();
  } else {
    // Nếu có lỗi, lưu dữ liệu và lỗi vào session
    $_SESSION['form_errors'] = $response['errors'];
    $_SESSION['form_data'] = $data;

    // Chuyển hướng về form
    // echo $response['errors'];
    header('Location: /hello-php/index.php');
    exit();
  }
}
