<!DOCTYPE html>
<html>
  
<body>
<style>
    #red{
        border: 1px solid beige;
        width: 50px;
        height: 50px;
        background: red;
        text-align: center;
        display: inline-block;
    }
    #blue{
        border: 1px solid beige;
        width: 50px;
        height: 50px;
        background:blue;
        text-align: center;
        display: inline-block;


    }
</style>
<?php
for ($i = 0; $i <= 6; $i++)
{
    for ($j = 1; $j <= 6; $j++)
    {
        if ($i %2 == 0){
            echo '<div id="blue"></div>'; ;
        }
    else{
        echo '<div id="red"></div>';
    }
    }
}
?>

</body>
</html>