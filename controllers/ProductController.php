<?php
require_once __DIR__ . '/../models/ProductModel.php';
class ProductController
{
  private $productModel;

  // Constructor
  public function __construct($db)
  {
    $this->productModel = new ProductModel($db);
  }
  // Lấy danh sách products
  public function getAll()
  {
    $products = $this->productModel->read();

    return $products;
  }

  // Kiểm tra và tạo bản ghi với dữ liệu truyền từ view
  public function create($data)
  {
    // logic kiểm tra data trước khi lưu.
    $errors = [];

    // Validate dữ liệu
    if (empty($data['product_name'])) {
      $errors['product_name'] = 'Tên sản phẩm không được để trống.';
    } elseif (strlen($data['product_name']) < 3) {
      $errors['product_name'] = 'Tên sản phẩm phải có ít nhất 3 ký tự.';
    }
    // Nếu có lỗi, ném ngoại lệ
    if (!empty($errors)) {
      return ['success' => false, 'errors' => $errors];
    }

    // Nếu không có lỗi, lưu dữ liệu và trả về thành công
    try {
      $result = $this->productModel->create($data); // Giả sử phương thức create() trong ProductModel thực hiện việc lưu dữ liệu
      if ($result) {
        return ['success' => true];
      }
    } catch (\Throwable $th) {
      // Trường hợp không lưu được
      return ['success' => false, 'errors' => ['general' => 'Không thể lưu dữ liệu.']];
    }
  }
}
