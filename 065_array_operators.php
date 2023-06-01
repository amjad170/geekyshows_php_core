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
//array operators ###############
$a = ["Amjad"=>500,"Rana"=>600,"Jabed"=>700];
$b = ["Amjad"=>500,"Rana"=>600,"Jabed"=>700];
$c = ["Amjad"=>"500","Rana"=>"600","Jabed"=>"700"]; //same order and key/value but but change identity 
$d = ["Rana"=>"600","Jabed"=>"700","Amjad"=>"500"]; //order and identiy chage and same  key/value
$e = ["Amjad"=>500,"Rana"=>600,"Jabed"=>700,"Kamal"=>800]; // extra key/value but same order
$f = ["Kamal"=>'PHP',"Amjad"=>'Java',"Rana"=>"CSS","Jabed"=>"HTML"]; // change key/value and order

// "+" operator
$result = $a+$e;
print_r($result);
echo "<br>";
$result2 = $e+$a;
print_r($result2);
echo "<br><br>";

// "==" operator only find same value not order  or identity
if($a==$c){
    echo "True";
}else{
    echo "False";
}
echo "<br><br>";


// "===" operator  find same value, order and identity.
if($a===$c){
    echo "True";
}else{
    echo "False";
}
echo "<br><br>";

// "!=" operator find  only same value.
if($a!=$e){
    echo "True";
}else{
    echo "False";
}
echo "<br><br>";

// "<>" operator find  only same value. != and <> same
if($a<>$e){
    echo "True";
}else{
    echo "False";
}
echo "<br><br>";

// "!==" operator find same value,tpye and order
if($a!==$b){
    echo "True";
}else{
    echo "False";
}
echo "<br><br>";






?>

</body>
</html>