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
//here document
    echo <<<MYDATA
    My name is Amjad Hossain.
    I am learning web development.
    Now I am learning "Php" <br>
MYDATA;  //body indentation should level or no space



//here document in a variable
    $info = <<<NEWDATA
    My name is Amjad Hossain.
    I am learning web development.
    Now I am learning "Php"
NEWDATA;  //body indentation should level or no space

echo $info;
?>

</body>
</html>