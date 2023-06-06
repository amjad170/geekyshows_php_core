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
$a = 2; //integer
$b = "Laptop"; //string
$c = 2000.50;  // float

printf("I have %d %s and price is %f", $a,$b,$c);

echo "<br>";
printf("%%");

echo "<br>";
printf("%b",$a); //binary

echo "<br>";
printf("%e",$a); //scientific 

echo "<br>";
echo "<br>";
printf("%%d <br>"); // show only text 
printf("Decimal Iteger %%d = %d <br>",$a);
printf("float  %%f = %d <br>",$a);
printf("string  %%s = %s <br>",$a);
printf("Binary  %%b = %b <br>",$a);
printf("scientific  %%e = %e <br>",$a);
printf("float  %%F = %F <br>",$a); // non lacale aware





?>

</body>
</html>