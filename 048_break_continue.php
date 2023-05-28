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
//break ###############

for($i=1; $i<=3; $i++){
    echo "Parent For loop: {$i} <br>";

    if($i==2){
        break;
    }
    

    for($x=1; $x<=3; $x++){
        echo "Nested: {$x} <br>";
    }
}



//continur ###############
echo "<br>";

for($i=1; $i<=3; $i++){
    echo "Parent For loop: {$i} <br>";

    if($i==2){
        continue;
    }
    

    for($x=1; $x<=3; $x++){
        echo "Nested: {$x} <br>";
    }
}




?>

</body>
</html>