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


//if ....else statement
if(true){
        echo "Parent if statement <br>";

        if(true){
            echo "Nested if statement <br>";
        }else{
            echo "Nested else statement <br>";
        }

}else{
    echo "Parent else statement <br>";

    if(true){
        echo "Nested if statement <br>";
    }else{
            echo "Nested else statement <br>";
            }
    }
        
 echo "Out side code of statement <br>";


//if ....else statement with ":" sign and endif
if(true):
        echo "Parent if statement <br>";

        if(true):
            echo "Nested if statement <br>";
        else:
            echo "Nested else statement <br>";
        endif;


else:
        echo "Parent else statement <br>";

        if(true):
            echo "Nested if statement <br>";
        else:
                echo "Nested else statement <br>";
        endif;
endif;
        
 echo "Out side code of statement <br>"



 
?>

</body>
</html>