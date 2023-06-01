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
//array_keys() function

$number = ["Amjad"=>10,"Jabed"=>20,"Rana"=>30,"Hossain"=>'40',];

$keys1 = array_keys($number); // $keys is also an array and all keys of $number is here
$keys2 = array_keys($number,40); // here 3rd value default "false" so type is not checked
$keys3 = array_keys($number,40,true); // here 3rd value is "true" so type is checked 

print_r($keys1);
echo "<br>";
print_r($keys2);
echo "<br>";
print_r($keys3);
echo "<br>";

echo $keys1[2];
echo "<br><br>";

for($i=0; $i<count($keys1); $i++){  // only key
    echo  $keys1[$i] ."<br>";
}

for($i=0; $i<count($keys1); $i++){           //value
    echo  $number[$keys1[$i]]  ."<br>";
}









?>

</body>
</html>