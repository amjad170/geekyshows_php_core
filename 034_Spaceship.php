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

$num1 = 10;
$num2 = 10;
$num3 = 20;
$num4 = 5;

echo ($num1<=>$num2)."<br>"; // both values are equal
echo ($num1<=>$num3)."<br>"; // first Value is smaller than 2nd value
echo ($num1<=>$num4)."<br><br>"; // first Value is greater than 2nd value





$num1 = "a";
$num2 = "a";
$num3 = "b";
$num4 = "A"; // A is smaller than a by value

echo ($num1<=>$num2)."<br>"; // both values are equal
echo ($num1<=>$num3)."<br>"; // first Value is smaller than 2nd value
echo ($num1<=>$num4)."<br>"; // first Value is greater than 2nd value
 
?>

</body>
</html>