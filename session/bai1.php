<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>Thông tin khách hàng</title>
<link rel="stylesheet" href="cookies.css">
<style>
    #forml{
            padding-left: 400px;
            padding-top:30px;
            width: 400px;
    }
    .hienthi{
            background-color:#008080;
            width: 380px;
            height: 250px;
            margin-left: 400px;
            padding-top:20px;
            padding-left: 20px;
            padding-top: 20px;

    }
    .center{
        background: greenyellow ;
        position: relative;
        top:22px;
    }
    .center1{
        font-family: 'Times New Roman', Times, serif;
    }
    .body{
        background:#008080;
        padding-left:20px  ;
        padding-top: 10px;
        padding-bottom: 10px ;
    }
    .input{
        /* border-radius: 10px; */
        height: 20px;
    }
    .bt1{
        padding: 10px 10px;
        border-radius:10px;
        
    }
</style>
</head>
<body>
    <?php 
        ini_set('display_errors',0);
        session_start();
        $flag=0;
        if (!empty($_POST['name']) && !empty ($_POST['email']) && !empty($_POST['add']) && !empty($_POST['phone']))
        {
            $infor=serialize(
                [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "add" => $_POST['add'],
                    "phone"=> $_POST['phone']
                ]
                );
            setcookie("khach_hang",$infor, time() +3600);
            $flag=1;
        }
    ?>
    <form id="forml" name="forml" method="post" action="cookie.php">
        <div class="center" >
            <h1 class="center1">Thông tin đăng nhập</h1>
        </div>
        <div class="body">
                  Name:
                <input class="input"  type="text" name="name"value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>" >
            <br> <br>
                Email:
                <input class="input" type="text" name="email" value="<?php if(isset($_POST['email']))  echo $_POST['email']; ?>">
            <br><br>
            Phone:
                <input class="input" type="text" name="phone" value="<?php if(isset($_POST['phone']))  echo $_POST['phone']; ?>">
            <br><br>
            Address::
                <input class="input" type="text" name="add" value="<?php if(isset($_POST['add']))  echo $_POST['add']; ?>">
            <br> <br>
            <button type="submit" class="bt1" >OK</button>
        </div>
    </form>
     <br> <br>   
    <div >
        <?php 
            if ($flag==1) {
                $data=unserialize($_COOKIE['khach_hang']);
                echo "<div class='hienthi'>";
                echo "<p>Thông tin chi tiết của khách hàng </p>";
                echo "name: " . $data["name"] . "<br></br> email: " . $data["email"] ."<br></br>" ."phone: " . $data["phone"] . "<br></br>"."address:".$data["add"]."<br></br>"  ;
                echo "<a href='test.php' >Click here! </a>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>