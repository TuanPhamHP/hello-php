<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>
      Rất tiếc, đã xảy ra lỗi trong quá trình xử lý dữ liệu.
    </h1>
    <h3>
      <?php
      session_start();
      if (isset($_SESSION['error'])) {
        $errorMessage = $_SESSION['error']['message'];
        echo $errorMessage;

        // Xóa thông báo lỗi sau khi hiển thị
        unset($_SESSION['error']);
      };
      session_destroy();
      ?>
    </h3>
  </div>
</body>

</html>