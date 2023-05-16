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
// case-sensitive constant
define("pi",3.141592); //here 3rd value default FALSE==case-sensitive
echo pi . "<br>";
//echo PI;  // it will doesn't work because it is case-sensitive

//case-insensitive Constant
define("mi",3.141592,true); //here 3rd value is TRUE==case-insensitive will work under php virsion 8.0
echo mi . "<br>";
echo MI . "<br>";
echo Mi . "<br>";
echo mI . "<br>";




 
?>

</body>
</html>