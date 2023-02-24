<!DOCTYPE html>
<html>
<body>

<?php
$messageArr=[
    1=>'Thêm mới thành công',
    2=>'Sửa thành công',
    3=>'Xóa thành công'
];
function redirect($path) {
    header("Location: " . $path);
    exit;

}
function get_message($code){
    global $messageArr;
    if(array_key_exists($code,$messageArr)){
        return $messageArr[$code];
    }
    return false;

}
?>

</body>
</html>