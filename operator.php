<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator in php</title>
</head>
<body>
    <?php
        $a1=100;
        $a2=200;
        //Arthemetic operator (+,-,*,%,/)
        $a3=$a1+$a2;
        echo "sum of var1 + var2 is";
        echo $a3,"<br>";
        //Assignment operator (=,+=,-=,*=,/=)
        $a4=$a2;
        echo $a4,"<br>";
        $a4 +=1;
        echo $a4,"<br>";
        //Comparison operator (true, false)
        echo var_dump(5==10),"<br>";
        echo var_dump(5!=10),"<br>";
        echo var_dump(5>=10),"<br>";
        echo var_dump(5<=10),"<br>";
        //Increment/Decrement operator (++.--)
        echo $a1++,"<br>";
           echo $a1,"<br>";
        echo $a1--,"<br>";
           echo $a1,"<br>";
        echo ++$a1,"<br>";
           echo $a1,"<br>";
        echo --$a1,"<br>";
        //Logical operator (and,or,xor,not)
        //and
        $newvar=(true and true);
            echo var_dump($newvar),"<br>";
        $newvar=(false and true);
            echo var_dump($newvar),"<br>";
        $newvar=(true and false);
            echo var_dump($newvar),"<br>";
        $newvar=(false and false);
            echo var_dump($newvar),"<br>";
        //or
        $newvar=(true or true);
            echo var_dump($newvar),"<br>";
        $newvar=(false or true);
            echo var_dump($newvar),"<br>";
        $newvar=(true or false);
            echo var_dump($newvar),"<br>";
        $newvar=(false or false);
            echo var_dump($newvar),"<br>";
        //xor
        $newvar=(true xor true);
            echo var_dump($newvar),"<br>";
        $newvar=(false xor true);
            echo var_dump($newvar),"<br>";
        $newvar=(true xor false);
            echo var_dump($newvar),"<br>";
        $newvar=(false xor false);
            echo var_dump($newvar),"<br>";
    ?>
</body>
</html>