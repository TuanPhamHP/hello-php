<?php
class ProductModel
{
  private $conn;
  private $table = 'products';

  // Constructor
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // Lấy danh sách products
  public function read()
  {
    $sql = "SELECT * FROM " . $this->table;
    return $this->conn->query($sql);
  }

  // Tạo bản ghi mới
  public function create($data)
  {
    $sql = "INSERT INTO products (product_name, description, images, regular_price, sale_price, brand_id, category_id) 
        VALUES ('{$data['product_name']}',
         '{$data['description']}', 
         '{$data['images']}', 
         {$data['regular_price']}, 
         {$data['sale_price']}, 
         {$data['brand_id']}, 
         {$data['category_id']})";
    return $this->conn->query($sql);
  }
}
