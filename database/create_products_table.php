<?php
require('db_connect.php');
// Tạo bảng products
$sql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    description TEXT,
    images VARCHAR(255),
    regular_price DECIMAL(10, 2),
    sale_price DECIMAL(10, 2),
    brand_id INT,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) !== TRUE) {
  echo "Lỗi khi tạo bảng: " . $conn->error;
};
