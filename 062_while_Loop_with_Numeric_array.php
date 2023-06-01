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
//while loop with Numeric array ###############
$name = ['Amjad','Hossain','Jabed','Rana'];

$i=0; 

while($i<count($name)){
    echo $name[$i] ."<br>";
    $i++;
}





// // //use : clone
// $x=0; 
// while($x<count($name)):
//     echo $name[$x] ."<br>";
//     $x++;
// endwhile;


?>

</body>
</html>