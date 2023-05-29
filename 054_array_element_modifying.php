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

$fees = array("Amjad"=>500,"jabed"=>300, "Rana"=>600, "Kamal"=>900);

echo$fees["Amjad"] ."<br>";
// edit array
 $fees["Amjad"] = 1200; //value new insert
echo$fees["Amjad"] ."<br>";

// delele array
unset($fees["jabed"]); // $fees["jabed"]=""; it not same as delete
echo $fees["jabed"] // undefine because it is deleted







?>

</body>
</html>