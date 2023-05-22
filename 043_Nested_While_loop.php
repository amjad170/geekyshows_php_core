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
//Nested While loop###############
$num = 1;

while($num<=2){
    echo "Main Wile Loop $num <br>";
    $num++;

    $val=1;
    while($val<=3){
        echo "Nested $val <br>";
        $val++;
    }
   
}


echo "<br>";
//Nested While loop usein : clone ###############
$num = 1;

while($num<=2):
    echo "Main Wile Loop $num <br>";
    $num++;

    $val=1;
    while($val<=3):
        echo "Nested $val <br>";
        $val++;
    
    endwhile;
endwhile;



 
?>

</body>
</html>