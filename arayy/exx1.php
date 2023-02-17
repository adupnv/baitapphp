<!DOCTYPE html>
<html>
    <style>
      
    </style>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
echo "Peter is " . $age['Peter'] . " years old."."<br>";
$sph = array("khoai", "san", "ngo");
for($i=0; $i<count($sph); $i++){
    echo $sph[$i] . "<br>";

}
?>

</body>
</html>