<?php

$name = $phone = $email = $content = "";
$name_err = $phone_err = $email_err = $content_err = "";

// Kiểm tra nếu form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty(trim($_POST["name"]))) {
    $name_err = "Vui lòng nhập tên.";
  } else {
    $name = trim($_POST["name"]);
  }

  if (empty(trim($_POST["phone"]))) {
    $phone_err = "Vui lòng nhập số điện thoại.";
  } elseif (!preg_match('/^[0-9]{10}$/', $_POST["phone"])) {
    $phone_err = "Vui lòng nhập đúng 10 số!";
  } else {
    $phone = trim($_POST["phone"]);
  }

  if (empty(trim($_POST["email"]))) {
    $email_err = "Vui lòng nhập địa chỉ email.";
  } else {
    $email = trim($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Địa chỉ email không hợp lệ.";
    }
  }
  
  if (empty(trim($_POST["content"]))) {
    $content_err = "Vui lòng nhập nội dung.";     
  } else {
    $content = trim($_POST["content"]);
  }

  if ($name_err == "" && $phone_err == "" && $email_err == "" && $content_err == "") {
    // nếu không có lỗi, hiển thị form thứ hai
    $kq = '<div id="form2" style="display: block;">
        <p>Chào bạn '.$name.'</p>
        <p>Số điện thoại của bạn là: '.$phone.'</p>
        <p>Email đăng nhập của bạn là: '.$email.'</p>
        <p>Nội dung bạn đã gửi cho hệ thống: '.$content.'</p>
      </div>';
  }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Liên hệ</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body class="bt1">
  <h2>Liên hệ</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <table>
    <tr>
      <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Họ và tên"></td>
      <td><span><?php echo $name_err; ?></span></td>
    </tr>
    <tr>
      <td><input type="text" name="phone" value="<?php echo $phone; ?>"  placeholder="Điện thoại"></td>
      <td><span><?php echo $phone_err; ?></span></td>
    </tr>
    <tr>
      <td><input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email"></td>
      <td><span><?php echo $email_err; ?></span></td>
    </tr>
    <tr>
      <td><textarea id="content" name="content" placeholder="Nội dung" value="<?php echo $content; ?>"></textarea></td>
      <td><span><?php echo $content_err; ?></span></td>
    </tr>
  </table>
    <button name="submit" type="submit">Gửi tin</button>
  <div id="form2" style="display: none;">
  </div>
  <?php
  ini_set('display_errors', 0);
  echo $kq
  ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>