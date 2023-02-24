<!DOCTYPE html>
<html>
  
<body>

<?php
for ($i = 0; $i >= 10; $i++){
    echo 'a';

 }

?>

<table>
    <tr>
        <td>Họ và tên:</td>
        <td><input type="text" name="name" value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>"></td>
    </tr>

    <tr>
        <td>Email:</td>
        <td><input type="text" name="mail" value="<?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>"></td>
    </tr>

    <tr>
        <td>Ngành học: </td>
        <td><input type="text" name="lop" value="<?php if(isset($_POST['lop']))  echo $_POST['lop']; ?>"></td>
    </tr>


    <tr>
        <td>Quê quán: </td>
        <td><input type="text" name="add" value="<?php if(isset($_POST['add']))  echo $_POST['add']; ?>"></td>
    </tr>
    <td ><button type="submit" class="bt1" >OK</button></td>


</table>
    

</body>
</html>