<!DOCTYPE html>
<html>

<body>
<?php
$klm = $_POST["klm"];
function km($klm){
    $mili = 0.26;
    return $klm * $mili;
}

?>

<form method="post">
    kilomet: <input type="text" name="klm" value="<?php echo $_POST["klm"]; ?>"><br><br>
    ket qua dam: <input type="text" name="dam" value="<?php echo km($klm); ?>"><br><br>
    <input type="submit" value="ok"><br><br>
</form>

</body>
</html>