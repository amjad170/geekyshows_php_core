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
//while loop with Associative array ###############
$fees = ['Amjad'=>500,'Hossain'=>600,'Jabed'=>700,'Rana'=>800];
$keys = array_keys($fees); //this is also an array

$i=0; 

while($i<count($keys)){
    echo "{$keys[$i]} = {$fees[$keys[$i]]} <br>";
    $i++;
}





//  // //use : clone
//  $x=0; 
// while($x<count($keys)):
//     echo $fees[$keys[$x]] ."<br>";
//     $x++;
// endwhile;


?>

</body>
</html>