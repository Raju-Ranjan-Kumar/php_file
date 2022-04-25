<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function in php</title>
</head>
<body>
    <?php
        function sum(){
            $a=10;
            $b=20;
            $c= $a+ $b;
            echo "sum of var1 and var2 is: <br>";
            echo $c;
        }
        sum();
    ?>
</body>
</html>