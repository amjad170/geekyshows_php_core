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
// For && both Condition must be True
if((5>2) && (5>6)){
    echo "True Condition <br><br>";
}else{
    echo "False Condition <br><br>";
}

// For "and" both Condition must be True
if((5>2) and (5>6)){
    echo "True Condition <br><br>";
}else{
    echo "False Condition <br><br>";
}

// For || one Condition must be True
if((5>2) || (5>6)){
    echo "True Condition <br><br>";
}else{
    echo "False Condition <br><br>";
}

// For "or" one Condition must be True
if((5>2) or (5>6)){
    echo "True Condition <br><br>";
}else{
    echo "False Condition <br><br>";
}

// For "!" when condition is true it returns false and when false it reurn true
if(!(5>2)){
    echo "True Condition <br><br>";
}else{
    echo "False Condition <br><br>";
}

// For "xor" when both condition is true or false it returns false 
if((5>2) xor (5>3)){
    echo "True Condition <br><br>";
}else{
    echo "False Condition <br><br>";
}
 
?>

</body>
</html>