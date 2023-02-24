<!DOCTYPE html>
<html>

<body>
<?php
   $dai = $_POST["dai"];
    $rong = $_POST["rong"];
    $dt= $dai * $rong;
    $db = "";
    if($dt >= 200){
    $db = "Bạn nên xây dựng Villa";
    }
    elseif($dt >= 150 && $dt <200){
        $db = "Bạn nên xây dựng biệt thự";
    }
    elseif($dt >= 100 && $dt <150){
        $db = "Bạn nên xây dựng nhà cấp bốn";
    }
    else{
    $db = "Số không hợp lệ";
    }
?>

   <form action="dientich.php"   method="post">
      <h2>Diện tích hình chữ nhật</h2>
    Chiều dài: <input type="text" id="dai" name="dai" value="<?php echo $_POST["dai"];?>"><br><br>
    Chiều rộng: <input type="text" id="rong" name="rong" value="<?php echo $_POST["rong"]; ?>"> <br><br>
    Diện tích:  <input type="text" id="dt" name="dt" value="<?php echo $dt; ?>"> <br><br>
                <input class="sm" type="submit" name="submit" value="Tính">    <br><br>
    Nhận xét:    <input type="text" id="dt" name="db" value="<?php echo $db; ?>"> <br><br>

    </form>
  
   </body>
</html>