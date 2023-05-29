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
//Double Arrow function ###############

$boys = array("Amjad","jabed","Rana","Kamal");

echo count($boys,0) ."<br>";

$array1 = ["Amjad","jabed","Rana","Kamal","Suhag"];
$array2 = ["Sultana","Amena","Jamena","Sharmin",$array1];

print_r($array2);
echo "<br>";

echo count($array1,0) ."<br>";
echo count($array2,1)."<br>"; // if mode 1,count() function count multidimentional elements also







?>

</body>
</html>