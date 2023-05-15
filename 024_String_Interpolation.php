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
// String Interpolation

$name = "Amjad";
$apple = "Apple";
echo "My name is $name. <br>"; //Surround variable name with space
echo "My name is {$name}Hossain <br>"; //Surround variable name with {} carly brases

echo '{$apple} price \$ten Dolar <br>'; // single quotation does not work string interpolation
echo "{$apple} price \$ten Dolar <br>"; // use back slash '\' to show $ not as a variable



 
?>

</body>
</html>