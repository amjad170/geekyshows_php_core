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
//Nested Do While loop###############

$name = 1;

do{
    echo "Parent Do_While: {$name}<br>";
    $name++;

    $val = 1;
    do{
        echo "Nested : {$val}<br>";
        $val++;
    }while($val<=5);

    echo "<br>";

}while($name<=3); // if condition not match the do while run at least one time

?>

</body>
</html>