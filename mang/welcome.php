<html>
    <style>
        .back {
            padding-top: 10px;
            text-align: center;
        }
    </style>
<body>

<table border="1" id="table">
        <tr>    
        <tr>
            <th>Ma Sinh Vien </th>
            <th>Ho Va Ten</th>
            <th>Ngay sinh</th>
            <th>Nganh hoc</th>
            <th>Que Quan</th>
            <th>edit</th>

        </tr>
        <tr>
                    <td>
                    <?php echo $_POST["id"] ?>
                     </td>
                    <td>
                    <?php echo $_POST["fname"] ?>
                    </td>
                    <td>
                    <?php echo $_POST["age"] ?>
                    </td>
                    <td>
                    <?php echo $_POST["lop"] ?>
                    </td>
                    <td>
                    <?php echo $_POST["ad"] ?>
                    </td>
                    <td>
                        <a href="">Sửa</a>
                        <a href="">Xóa</a>
                    </td>
                </tr>
        </tr>
        <div class="back"> 
            <button class="btn-info"> 
           <a href="index.php">BACK</a>
    </button> 
    </div>
</body>

</html>