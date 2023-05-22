<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//elseif condition
 $price = 10;

 if($price>5){
    echo "If condition is True <br><br>";
 }
 elseif($price>8){
    echo "1st elseif condition is True <br><br>";
 }
 elseif($price>9){
    echo "2nd elseif condition is True <br><br>";
 }
 else{
    echo "All condition is False <br><br>";
 }


//elseif condition using : clone
 $price = 10;

 if($price>50):
    echo "If condition is True <br><br>";
 
 elseif($price>80):
    echo "1st elseif condition is True <br><br>";
 
 elseif($price>9):
    echo "2nd elseif condition is True <br><br>";
 
 else:
    echo "All condition is False <br><br>";
 endif;



 
?>

</body>
</html>