<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Page</title>
</head>
<style>
    .tieude{
    color:black;
    background-color: pink;
    width: 40%;
    text-align: center;
    margin: auto;
    font-size: 24px;
    font-weight: bold;
}
.echo{
    color:red;
    display: absolute;
    width: 320px;
    float: right;
    padding-top:50px;
    margin-right: 20%;
    font-size: 20px;
    font-weight: bold;
}
.image1{
    display: absolute;
    margin-top:3%;
    margin-left:15%;
    width: 30%;
   
}
.image2 {
    margin-top:3%;
    margin-left:15%;
    width:70%;
    height: 70%;
   
}     
</style>
<body>
<div class="tieude">
        
        
    </div>

    <?php 
        $data=unserialize($_COOKIE['khach_hang']);
        echo '<div class="echo">Xin chào '. "name: " . $data["name"] . "<br></br> email: " . $data["email"] ."<br></br>" ."phone: " . $data["phone"] . "<br></br>"."address:".$data["add"].'<br>';
        echo '<a href="cookie.php"> Click để quay về trang đăng nhập </a>';
        echo '</div>';
        echo '<img class="image1" src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2020/03/ba-na-hill.jpeg">';
        echo '<img class="image2" src="https://www.invert.vn/media/uploads/uploads/2022/12/03143748-12-hinh-anh-dep.jpeg">';
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>

</html>