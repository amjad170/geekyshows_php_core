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
//Multidimensional numeric array ###############

$laptop = [
    ["Rahul","Dell",10],
    ["Sonam","HP",20],
    ["Sumit","Lenove",30],
];

// echo "{$laptop[0][0]} {$laptop[0][1]} {$laptop[0][2]} <br>";
// echo "{$laptop[1][0]} {$laptop[1][1]} {$laptop[1][2]} <br>";
// echo "{$laptop[2][0]} {$laptop[2][1]} {$laptop[2][2]} <br>";

for($i=0; $i<count($laptop); $i++){
    for($j=0; $j<count($laptop[$i]); $j++){
        echo $laptop[$i][$j] ." ";
    }
    echo "<br>";
}







?>

</body>
</html>