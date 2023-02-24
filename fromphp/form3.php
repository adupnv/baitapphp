<!DOCTYPE html>
<html>
<head>
    <title>Tính Tiền Dịch Vụ</title>
    <style>
        

        td{
            margin-left: 50px;
            padding: 10px;
        }
        .title{
            text-align: center;
            font-weight: bold;
            
            color: #ffffff;
        }
        input{
            width: 300px;
        }
        button{
            background: #00FF00 ;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php 
     require_once('function.php');
    ?>
    <?php 
    if(!empty($_GET[$message])){
        $messageCode = $_GET[$message];
        echo get_message($messageCode);
    }
    ?>
<?php
    ini_set('display_errors',0);
    $giatla = $_POST["giatla"];
    $ansang = $_POST["ansang"];
    $tamhoi = $_POST["tamhoi"];
    $meal = $_POST["meals"];
    $type = $_POST["typeroom"];
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]);
    $date = $checkout- $checkin ;
    $service = $giatla + $ansang + $tamhoi;
    
    if ($type == "A") {
             $ngaytra = floor($date / (606024)) * 100;
            }
    elseif($type == "B") {
             $ngaytra = floor($date / (606024)) * 200;}
    elseif ($type == "C") {
            $ngaytra = floor($date / (606024)) * 300;};
    $tatol = $meal + $service  + $ngaytra;
?>
    <form action="" method="post">
        <table style="width: 500px; margin-left: auto; margin-right: auto; background: gray;">
            <tr class="title">
                <td colspan="2">
                    TÍNH TIỀN
                </td>
            </tr>
            <tr>
                <td>
                    LOẠI PHÒNG
                </td>
                <td>
                    <select name="typeroom">
                        <option >A</option>
                        <option >B</option>
                        <option >C</option>                       
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                </td>
                <td>
                    <input type="date" name="checkin" value="">
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="date" name="checkout"  value="">
                </td>
            </tr>           
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="meals" value=" ">
                </td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input class="dv" type="checkbox" name="giatla" value="100 ">GIẶT LÀ 
                    <input class="dv" type="checkbox" name="ansang" value="200">ĂN SÁNG
                    <input class="dv" type="checkbox" name="tamhoi" value="500 ">TẮM HƠI 
                </td>
            </tr>
            <tr class="title">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                    <button type="cancel">cancel</button>
                </td>
                 
            </tr>

        
        </table>
        <br> <br> <br>
        <?php 
        ?>
    </form >

    <h1 style="position: absolute; margin-left : 50px" >BILL</h1>
    <form action="" style="margin-left: 200px;" method="post">
        TypeRoom         : <input type="text" value="<?php echo $type ?>"> <br> <br>
        Rental hours     : <input type="text" value="<?php echo $ngaytra ?>"> <br> <br>
        Money for meals  : <input type="text" value="<?php echo $meal ?>"> <br> <br>
        Money for service: <input type="text" value="<?php echo $service ?>"> <br> <br>
        Total            : <input type="text" value="<?php echo $tatol?>"> <br> <br>
    </form>
</body>
</html>