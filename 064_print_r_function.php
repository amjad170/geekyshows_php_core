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
//while loop with Associative array ###############
$name = ["Amjad","Rana","Jabed"];

print_r($name); // 2nd perameter default "false"

echo "<br>"; 

$result = print_r($name,true); //2nd perameter is 'true' so it return or store value in $result variable
echo($result);


?>

</body>
</html>