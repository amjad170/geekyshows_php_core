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


// if statement with {} bracket
if(10>2){
    echo "Yes It is True <br>";
}

echo "Rest of the code <br> <br>";

// if statement with : clone,here {==:    and      }==endif
if(10>2):
    echo "Yes It is True <br>";
endif;

echo "Rest of the code <br> <br>";

// Nested if statment
if(10>2){
    echo " This is Father if Statement <br>";

    if(true){
        echo "This is Nested if statement <br>";
    }
}

echo "Rest of the code <br> <br>";


// Nested if statment with :
if(10>2):
    echo " This is Father if Statement <br>";

    if(true):
        echo "This is Nested if statement <br>";
    endif;

endif;

echo "Rest of the code <br>";






 
?>

</body>
</html>