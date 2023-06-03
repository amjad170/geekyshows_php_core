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
// Here doc vs now doc ###############

$number = 567;

//HERE DOC
echo <<<TOKENONE
In HERE DOC You can write anything and you can pass "data" $number.
In 'here' doc You can write anything and you can pass data.
In here doc You can write anything and you can pass data.
TOKENONE;

//NOW DOC USE SINGLE QUOTE ''
echo <<<'TOKENTOW'
In 'NOW DOC' You can write anything BUT can't pass "data" $number.
TOKENTOW;

//set in a variable
$x = <<<'TOKENTOW'
In 'NOW DOC' You can write anything BUT can't pass "data" $number.
TOKENTOW;
echo $x;








?>

</body>
</html>