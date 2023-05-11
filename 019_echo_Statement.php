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
// Different style echo
echo "Dauble quote <br>";
echo 'Single quote <br>';
echo 1280 . '<br>';//with out quote when integer or float
echo ('In curly bases <br>');
echo 'visit ',"Amjad Hossain<br>";//use comma for concat
echo 'visit '."Amjad Hossain<br>";//use . dot for concat

// echo with html
echo "<b>Echo with html</b> <br>";

// echo with variable
$value1 = 10;
$value2 = 20;
$sum = $value1+$value2;

echo $value1."<br>";
echo "value is ", $value1,"<br>";//use comma for concat
echo "value is ". $value1."<br>";//use dot for concat
echo $value1+$value2 ."<br>"; //use plus fro add
echo "Total ". $value1+$value2 ."<br>";
echo "<b>Total</b> ". $sum ."<br>";
echo "<b>".$value1."</b> <br>"; //bold a vairiable
echo $value1." <b>And</b> ".$value2 ."<br>"; //bold a vairiable
?>

</body>
</html>