<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
require_once('function.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors = [];
    if(empty(trim($_POST['fullname']))){
        $errors['fullname']['required'] ='Họ tên không được để trống';

    } 
    if(empty(trim($_POST['email']))){
        $errors['email']['required'] ='Email không được để trống';

    } else{
       if(!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)){
        $errors['email']['invaild'] ='Email không hợp lệ';
       }
    }
    if(empty(trim($_POST['password']))){
        $errors['password']['required'] ='Mật khẩu không được để trống';

    } else{
       if(!filter_var(trim($_POST['password']), FILTER_VALIDATE_INT,['options'=>['min_range'=>1]])){
        $errors['password']['invaild'] ='Mật khẩu không hợp lệ';
       
       }
    }
    if(empty($errors)){
    
        redirect('form3.php?message=1');
    }else{
        echo 'Không thành công <br/>';
    }
}

?>
<form method="post">
    <p>
        Họ và tên:
        <input type="text" name="fullname" placeholder="Họ và tên" value=" <?php echo(!empty($_POST['fullname'] ))?$_POST['fullname']:false;?>" >
        <br/>
        <?php 
          echo(!empty($errors['fullname']['required'] ))? '<span style="color: red;">'.$errors['fullname']['required'].'</span>':false;
          
        ?>
        
    </p>
    <p>
        E-mail:
        <input type="email" name="email" placeholder="Email" value=" <?php echo(!empty($_POST['email'] ))?$_POST['email']:false;?>"><br/>
        <?php 
          echo(!empty($errors['email']['required']  ))? '<span style="color: red;">'.$errors['email']['required'] .'</span>':false;
          echo(!empty($errors['email']['invaild'] ))? '<span style="color: red;">'.$errors['email']['invaild'].'</span>':false;
          
        ?>
    </p>
    <p>
        Password:
        <input type="password" name="password" placeholder="password" value=" <?php echo(!empty($_POST['password'] ))?$_POST['password']:false;?>"><br/>
        <?php 
          echo(!empty($errors['password']['required'] ))? '<span style="color: red;">'.$errors['password']['required'].'</span>':false;
          echo(!empty($errors['password']['invaild'] ))? '<span style="color: red;">'.$errors['password']['invaild'].'</span>':false;
          
        ?>
    </p>
    <p>
        <button type="submit" >Submit</button>
    </p>

</form>

</body>
</html>