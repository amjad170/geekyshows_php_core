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
//Numeric Array ###############
$name = []; //$name = ["Amjad","Jabed","Rana"];

$name[0]="Amjad";   // $name[]="Amjad"; No difference
$name[1]="Jabed";   // $name[]="Jabed"; 
$name[2]="Rana";    // $name[]="Rana"; 

print_r($name);
echo "<br>";


//Numeric Array auto indexing ###############
$price= [];  // $price= [500,900,1200];

$price[]= 500; //this is 0 but 2 idext empty
$price[3]= 900;
$price[]= 1200;

// $price[]= 500; //this will be not count
// $price[0]= 900;
// $price[]= 1200;

print_r($price);






?>

</body>
</html>