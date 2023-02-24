<!DOCTYPE html>
<html>
<style>
        form{
            
         height: 230px;
         width: 400px;
         border: 2px solid #ccc;
         background: #ffaaaa;
        
            
        }
        h2{
            margin-top: auto;  
            background: #ffaa56;
            height: 50px;

        }
        .sm{
            background: #00bf00;
            border : #ffff;
        }
    </style>
<body>
<?php
   $dai = $_POST["dai"];
    $rong = $_POST["rong"];
    $dt= $dai * $rong;
?>

   <form action="input.php"   method="post">
      <h2>Diện tích hình chữ nhật</h2>
    Chiều dài: <input type="text" id="dai" name="dai" value="<?php echo $_POST["dai"];?>"><br><br>
    Chiều rộng: <input type="text" id="rong" name="rong" value="<?php echo $_POST["rong"]; ?>"> <br><br>
    Diện tích:  <input type="text" id="dt" name="dt" value="<?php echo $dt; ?>"> <br><br>
                  <input class="sm" type="submit" name="submit" value="Tính">

   </form>
  
   </body>
</html>