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
//foreach loop with Associative array ###############

$fees = ["Amjad"=>500,"Jabed"=>900,"Rana"=>1200,"Hossain"=>2000];

//only value
foreach($fees as $value){      //value is insert one by one
    echo "Fees: {$value} <br>";
}

echo "<br>";
//key and value
foreach($fees as $key => $value){
    echo "Key:{$key} Fees: {$value} <br>";
}



// //use : clone
// foreach($fees as $key => $value):
//     echo "Key:{$key} Fees: {$value} <br>";
// endforeach







?>

</body>
</html>