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
//Switch statement
$date = 13;

switch($date){
    case 9 :
        echo "Bangla <br><br>";
        break;
    case 10 :
        echo "English part1 <br><br>";
        echo "English part2 <br><br>";
        break;
    case 11 :
        echo "Mathematics <br><br>";
        break;
    case 12 :
        echo "Pysics <br><br>";
        break;
    case 13 :
    case 14 :
    case 15 :
    case 16 :
        echo "Holyday <br><br>";
        break;

    default :
        echo "No Exam <br><br>";    
}



//Switch statement using : clone
$date = "Thursday"; //case-sensitive

switch($date):
 
    case "Sunday" :
        echo "English part1 <br><br>";
        echo "English part2 <br><br>";
        break;

    case "Monday" :
        echo "Mathematics <br><br>";
        break;

    case "Tuesday" :
        echo "Pysics <br><br>";
        break;

    case "Wednesday" :
        echo "Biology <br><br>";
        break;

    case "Thursday" :
    case "thursday" :              //for case-sensitive
        echo "Bangla <br><br>";
        break;
        
    case "Satarday" :
    case "Fryday" :
        echo "Holyday <br><br>";
        break;

    default :
        echo "No Exam <br><br>";    

    endswitch;


 
?>

</body>
</html>