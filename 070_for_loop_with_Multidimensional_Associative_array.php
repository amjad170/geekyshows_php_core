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
// for Loop Multidimensional Associative array ###############

$runs = [
   "India"=>["Rahul"=>200,"koholi"=>300,"Dhoni"=>400],
   "Pakistan"=>["Afridi"=>200,"Malek"=>300,"Imran"=>400],
   "Bangladesh"=>["Moshfiq"=>200,"Tamim"=>300,"Riad"=>400],
];

// echo "{$runs["India"]["Rahul"]} {$runs["India"]["koholi"]} {$runs["India"]["Dhoni"]} <br>";
// echo "{$runs["Pakistan"]["Afridi"]} {$runs["Pakistan"]["Malek"]} {$runs["Pakistan"]["Imran"]} <br>";
// echo "{$runs["Bangladesh"]["Moshfiq"]} {$runs["Bangladesh"]["Tamim"]} {$runs["Bangladesh"]["Riad"]} <br>";

$keys = array_keys($runs);  // $keys =["India","Pakistan","Bangladesh"]


for($i=0; $i<count($keys); $i++){
    $keys2 = array_keys($runs[$keys[$i]]);  //$keys[0]==India==["Rahul"=>200,"koholi"=>300,"Dhoni"=>400], so $keys2 = ["Rahul","koholi","Dhoni"]
    for($j=0; $j<count($keys2); $j++){
        echo $runs[$keys[$i]][$keys2[$j]]." ";  // $runs[$keys[0]][$keys2[0]] == $runs["India"]["Rahul"] == 200
    }
    echo "<br>";
}









?>

</body>
</html>