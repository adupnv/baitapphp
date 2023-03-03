<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Show products</title>
    <style>
        img{
            width:200px;
            height: 250px;
            margin-top: 5px;
           
            
        }
        .titles{
            text-align:center;
            background: orange ;
            color: white;
            font-size:  30px;
           
        }
        .price{
            color: red;
            text-align: center;
        }
        .card{
            margin: auto;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            max-width: 270px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        input{
            background: orange;
            border: none;
           
        }
      
       
    </style>
    
</head>
<body>
    <?php 
        $sanpham=array(
            'THỜI TRANG NAM'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://media.coolmate.me/cdn-cgi/image/width=672,height=990,quality=85,format=auto/uploads/May2022/cafexammoi.jpg"/>',
                    'name'=>'áo polo nan',
                    'Price'=>399090,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://media.coolmate.me/cdn-cgi/image/quality=80,format=auto/uploads/September2022/ao-khoac-for-winter-den-3_29.jpg"/>',
                    'name'=>'áo khoắc ni',
                    'Price'=>349900,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://media.coolmate.me/cdn-cgi/image/width=672,height=990,quality=85,format=auto/uploads/June2022/CoolMate0537.jpg"/>',
                    'name'=>'áo sơ mi',
                    'Price'=>200090,
                ),
                
               
                ),

                'THỜI TRANG NỮ'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://elise.vn/media/catalog/product/cache/f677d7e3a5087b6a18a5b1f320b78594/q/u/quan-suong-den-cuc-cap-fs2204202bpwobk3.jpg"/>',
                        'name'=>'SM TRẮNG CỔ THÊU CHỮ',
                        'Price'=>500000,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://elise.vn/media/catalog/product/cache/f677d7e3a5087b6a18a5b1f320b78594/s/e/set-sm-to-den-tay-theu-hoa-fs2210108storbk.jpg"/>',
                        'name'=>'SET SM TƠ ĐEN TAY THÊU HOA',
                        'Price'=>1090900,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://elise.vn/media/catalog/product/cache/f677d7e3a5087b6a18a5b1f320b78594/s/m/sm-to-trang-beo-tang-fw2205153tsorwh2.jpg"/>',
                        'name'=>'SM TƠ TRẮNG BÈO TẦNG',
                        'Price'=>399090,
                    ),
                    
                    
                )
        )
    ?>
    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div class="container"> <div class="titles"><?php echo $k ?></div></div>
        <div class="container">
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-4">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-text">
        
                                    <span ><input type="submit" value="Đặt mua" ></span>
                                </p>
                            </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>
           
        
           
    <?php
    }
    ?>
  
</body>
</html>