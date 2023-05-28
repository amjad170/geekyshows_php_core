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
$name = ["Amjad","Kamal","Jamal"];
echo $name[0]."<br>";

//Associative Array ###############
$name = ["Amjad"=>500,"Kamal"=>600,"Jamal"=>700];
echo $name["Amjad"]."<br>";

//Multidimensional Array ###############
$name = ["Amjad"=>900,"Kamal"=>600,"Jamal"=>700,["Sharmin"=>300,"Rita"=>450,"Sumi"=>670]];
echo $name["Amjad"]."<br>";
echo $name[0]["Rita"]."<br>";






?>

</body>
</html>