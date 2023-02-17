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
    kilomet: <input type="text" name="klm" value="<?php echo $_POST["klm"] ?>">
    ket qua dam: <input type="text" name="dam" <?php echo km($klm) ?>>
    <button type="submit" valua="ok">Submit</button>
</form>

</body>
</html>