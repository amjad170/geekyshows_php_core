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
//for loop###############

for($i=0; $i<=10; $i++){
    echo "Number: {$i} <br>";
}


// using : clone 
echo "<br>";

for($i=0; $i<=10; $i++):
    echo "Number: {$i} <br>";
endfor;

?>

</body>
</html>