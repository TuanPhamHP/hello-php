<?php
session_start();
?>
<h2>Nhập thông tin sản phẩm</h2>

<!-- Hiển thị thông báo thành công nếu có -->
<?php if (isset($_SESSION['success_message'])) : ?>
  <p style="color: green;"><?php echo htmlspecialchars($_SESSION['success_message']); ?></p>
  <?php unset($_SESSION['success_message']); ?>
<?php endif; ?>

<form action="./components/formHandle.php" method="post">
  <label for="product_name">Tên sản phẩm:</label>
  <input type="text" id="product_name" name="product_name" value="<?php echo htmlspecialchars($_SESSION['form_data']['product_name'] ?? ''); ?>">
  <span style="color: red;">
    <?php echo htmlspecialchars($_SESSION['form_errors']['product_name'] ?? ''); ?>
  </span>
  <br><br>

  <label for="regular_price">Giá sản phẩm:</label>
  <input type="text" id="regular_price" name="regular_price" value="<?php echo htmlspecialchars($_SESSION['form_data']['regular_price'] ?? ''); ?>">
  <span style="color: red;">
    <?php echo htmlspecialchars($_SESSION['form_errors']['regular_price'] ?? ''); ?>
  </span>
  <br><br>

  <!-- Thêm các trường khác ở đây -->

  <input type="submit" value="Lưu sản phẩm">

  <span style="color: red;">
    <?php echo htmlspecialchars($_SESSION['form_errors']['general'] ?? ''); ?>
  </span>
</form>