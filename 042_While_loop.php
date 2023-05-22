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
//While loop###############
$num = 1;

while($num<=5){
    echo "GeekyShows Count: $num <br>";
    $num++;
}


echo "<br><br>";

//While loop###################
$num = 1;

while(true){
    echo "GeekyShows Count: $num <br>";
    $num++;
    
    if($num==10)
    break;
}



echo "<br><br>";

//While loop using : clone##################
$num = 1;

while($num<=5):
    echo "GeekyShows Count: $num <br>";
    $num++;
endwhile;


 
?>

</body>
</html>