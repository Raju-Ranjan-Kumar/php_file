<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while loop</title>
</head>
<body>
    <?php
        $var=0;
        do{
            echo "The value of var is:";
            echo $var,"<br>";
            $var++;
        }
        while($var< 10);
    ?>
</body>
</html> 