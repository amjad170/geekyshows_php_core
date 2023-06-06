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
//Argument Swapping or specifie placeholder or position specifier
$a =2;
$b =45;
$c =20;
$d =87;

printf("There are %2\$d laptops %1\$d mouse %3\$d phones and %4\$d keyboards",$a,$b,$c,$d); // double quote '/' na dile $d k variable hisebe mone kore

echo "<br>";
printf('There are %2$d laptops %1$d mouse %3$d phones and %4$d keyboards',$a,$b,$c,$d); // single quote no need "/"




?>

</body>
</html>