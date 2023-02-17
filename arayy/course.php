<!DOCTYPE html>
<html>
    <style>
      
    </style>
<body>

<?php
$course = array(
    'FRONTEND' => array(
        'title' => 'Khóa học lập trình Frontend online',
        'fee' => 1200000
    ),
    'PHP-MYSQL' => array(
    'title'=>'khóa học lập trình web PHP-MYSQL',
    'fee' => 16800000
    )
);
foreach ($course as $k => $v) {
    echo "{$k}</br>";
    echo "--{$v['title']}</br>";
    echo "--{$v['fee']}</br>";

}

?>

</body>
</html>