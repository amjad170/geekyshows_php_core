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
//foreach loop with numeric array ###############

$names = ["Amjad","Jabed","Rana","Hossain"];

//only value
foreach($names as $value){
    echo "Name: {$value} <br>";
}

echo "<br>";
//key and value
foreach($names as $key => $value){
    echo "Key:{$key} Name: {$value} <br>";
}



// //use : clone
// foreach($names as $key => $value):
//     echo "Key:{$key} Name: {$value} <br>";
// endforeach







?>

</body>
</html>