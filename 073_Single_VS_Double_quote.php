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
// Access character ###############

$number = 567;

echo '$number <br>'; //single quote can't parse data
echo "$number <br>";

echo 'I am "php" <br>'; //double quote within single quote
echo "I am 'php' <br>"; //single quote within double quote

// escape sequence
echo 'I am \'php\' <br>'; //single quote within single quote
echo "I am \"php\" <br>"; //double quote within double quote
echo "I am \"php\" \\laravel <br>"; //double quote within double quote






?>

</body>
</html>