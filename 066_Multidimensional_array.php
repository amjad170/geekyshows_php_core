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

foreach($laptop as $value){
    echo "{$value[0]} {$value[1]} {$value[2]} <br>";
}


echo "<br>";
//Multidimensional Associative array ###############

$runs = [
   "India"=>["Rahul"=>200,"koholi"=>300,"Dhoni"=>400],
   "Pakistan"=>["Afridi"=>200,"Malek"=>300,"Imran"=>400],
   "Bangladesh"=>["Moshfiq"=>200,"Tamim"=>300,"Riad"=>400],
];

// echo "{$runs["India"]["Rahul"]} {$runs["India"]["koholi"]} {$runs["India"]["Dhoni"]} <br>";
// echo "{$runs["Pakistan"]["Afridi"]} {$runs["Pakistan"]["Malek"]} {$runs["Pakistan"]["Imran"]} <br>";
// echo "{$runs["Bangladesh"]["Moshfiq"]} {$runs["Bangladesh"]["Tamim"]} {$runs["Bangladesh"]["Riad"]} <br>";

foreach($runs as $keys=>$value){
    echo "{$keys} <br>";
    foreach($value as $newkeys=> $newvalue){
        echo "{$newkeys}: {$newvalue}  <br>";
    }
   echo "<br>";
}




?>

</body>
</html>