<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop</title>
</head>
<body>
    <?php
        $a=0;
        while ($a <= 10) {
            echo "The value of a is:";
            echo $a,"<br>";
            $a++;
        }
        //array with while loop
        $arr=array("Raju","India","Delhi","php");
        $a1=0;
        while ($a1 < count($arr)) {
            echo "The array element is:";
            echo $arr[$a1],"<br>";
            $a1++;
        }
    ?>
</body>
</html>