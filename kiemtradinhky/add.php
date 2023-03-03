<?php


$data = array();
$errors = array();

// Biến kiểm tra có phải action edit hay không
$is_update_action = false;

// Trường hợp edit thì ta lấy thông tin để show ra cho người dùng thấy
if (!empty($_GET['id'])) {
    $data = getStudent($_GET['id']);
    $is_update_action = true;
}

// Nếu người dùng click vào nút submit
if (!empty($_POST['add_student'])) {

    // Lấy thông tin
    $data['name'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    
    $data['sdt'] = isset($_POST['phon']) ? $_POST['sdt'] : '';
    $data['email'] = isset($_POST['gmail']) ? $_POST['gmail'] : '';
    $data['nd'] = isset($_POST['noidung']) ? $_POST['noidung'] : '';

    // Validate
    if (empty($data['name'])) {
        $errors['name'] = 'Ban chua nhap ten';
    }
    if (empty($data['sdt'])) {
        $errors['sdt'] = 'Ban chua nhap Số Điện Thoại';
    }
    
    if (empty($data['email'])) {
        $errors['email'] = 'Ban chua nhap Email';
    }
    if (empty($data['nd'])) {
        $errors['nd'] = 'không để rõng';
    }
    if(empty($errors)){
    
        redirect('thanhcong');
    }else{
        echo 'Không thành công <br/>';
    }

    //  Nếu dữ liệu hợp lệ thì thực hiện thao tác update thông tin
    // đồng thời redirect về trang danh sách
    // if (empty($errors)) {
    //     updateStudent($data['name'], $data['sdt'], $data['email'], $data['nd'], );
    //     header("Location:student-list.php");
    // }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Thêm sinh viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>


    <br> <br>
    <form method="post">
        <table border="1" cellspacing="0" cellpadding="10" class="table-hover" align="center">
           
            <tr>
                <td>Họ tên</td>
                <td>
                    <input type="text" name="fullname" value="<?php echo !empty($data['name']) ? $data['name'] : ''; ?>" />
                    <?php echo !empty($errors['name']) ? $errors['name'] : ''; ?>
                </td>
            
                </td>
            </tr>
            <tr>
                <td>Số Điện Thoại</td>
                <td>
                    <input type="text" name="phon" value="<?php echo !empty($data['sdt']) ? $data['sdt'] : ''; ?>" />
                    <?php echo !empty($errors['sdt']) ? $errors['sdt'] : ''; ?>
                </td>
                
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="gmail" value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>" />
                    <?php echo !empty($errors['email']) ? $errors['email'] : ''; ?>
                </td>
                   
                </td>
            </tr>
          
           
            <tr>
                <td>Nội dung</td>
                <td>
                    <input type="tex" name="noidung" value="<?php echo !empty($data['nd']) ? $data['nd'] : ''; ?>" />
                    <?php echo !empty($errors['nd']) ? $errors['nd'] : ''; ?>
                </td>
                
                </td>
            </tr>
             <input type="submit" value="Gởi tin">
        </table>
    </form>

</body>

</html>