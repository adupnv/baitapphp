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
            width: 220px;
            
        }
        .titles{
            text-align:center;
            background: orange ;
            color: white;
            font-size:  30px;
        }
        .price{
            color: red;
        }
       
    </style>
    
</head>
<body>
    <?php 
        $sanpham=array(
            'NỔI BẬT NHẤT'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"/>',
                    'name'=>'Nokia black future',
                    'Price'=>399090,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://p-vn.ipricegroup.com/uploaded_44f3cf4a8d6ec58c0da60512fcde7443.jpg"/>',
                    'name'=>'hawei nova 2i',
                    'Price'=>3990900,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"/>',
                    'name'=>'Nokia black future',
                    'Price'=>399090,
                ),
                'sp4'=>array(
                    'img'=>'<img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"/>',
                    'name'=>'Nokia black future',
                    'Price'=>399090,
                ),
               
                ),

                'SẢN PHẨM MỚI NHẤT'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"/>',
                        'name'=>'Nokia black future',
                        'Price'=>399090,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://p-vn.ipricegroup.com/uploaded_44f3cf4a8d6ec58c0da60512fcde7443.jpg"/>',
                        'name'=>'hawei nova 2i',
                        'Price'=>3990900,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"/>',
                        'name'=>'Nokia black future',
                        'Price'=>399090,
                    ),
                    'sp04'=>array(
                        'img'=>'<img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"/>',
                        'name'=>'Nokia black future',
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
                       <div class="col-sm-2">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-text">
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <span style="font-size:  10px;">500 đánh giá</span>
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