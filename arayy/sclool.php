<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <style>
        .list_title{
            color:red;
         
        }
        .list_schools{
            width: 400px;
            height: 200px;
        }
        th{
            background:pink;
        }
        td{
            background:#BEB6F2;
        }
    </style>
</head>
<body>
    <?php 
        $schools = array(
            'Student' => array (
                'SV01' => array (
                    'name' => 'A Dủ',
                    'birth' => '30/05/2002',
                    'gender' => 'Nam'
                ),
                'SV02' => array(
                    'name' => 'A Tiến',
                    'birth' => '27/01/2003',
                    'gender' => 'Nam'
                ),
                'SV03' => array(
                    'name' => 'Bùi Xuân hoàn',
                    'birth' => '23/09/2002',
                    'gender' => 'Nam'
                ),
                'SV04' => array(
                    'name' => 'Đinh Ngọc Sơn',
                    'birth' => '07/08/2003',
                    'gender' => 'Nam'
                ),
                'SV05' => array(
                    'name' => 'Hồ Thị Hương',
                    'birth' => '14/06/2003',
                    'gender' => 'Nữ'
                )


            ),
            'Teacher' => array (
                'GV01' => array (
                    'name' => 'Nguyen Cong Dinh',
                    'birth' => '10/11/1988',
                    'gender' => 'Nam'
                ),
                'GV02' => array(
                    'name' => 'Truong Thu Hang',
                    'birth' => '28/11/1987',
                    'gender' => 'Nữ'
                ),
                'GV03' => array(
                    'name' => 'Nguyen Thi Thuy Trang',
                    'birth' => '05/09/1997',
                    'gender' => 'Nữ'
                ),
                'GV04' => array(
                    'name' => 'Nguyen Thi Phuong Thao',
                    'birth' => '02/02/2003',
                    'gender' => 'Nữ'
                ),
                'GV05' => array(
                    'name' => 'Nguyen Thi Phuong Thao',
                    'birth' => '02/02/2003',
                    'gender' => 'Nữ'
                )

            )   
        )
    ?>
    <div id="content">
        <?php 
            foreach ($schools as $k => $v){
                ?>
                <h1 align="center" class="list_title"><?php echo $k; ?></h1>
                <table  align="center" class="list_schools">
                    <tr>
                        <th>MaSV</th>
                        <th>Tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                    </tr>
                    <?php foreach ($v as $k1 => $v1){
                        ?>
                        <tr>
                            <td><?php echo $k1; ?></td>
                            <td><?php echo $v1['name'] ?></td>
                            <td><?php echo $v1['birth'] ?></td>
                            <td><?php echo $v1['gender'] ?></td>
                    </tr>
                    <?php   }
                    ?>

                </table>
                <?php 
            }
            ?>
       
    </div>
</body>