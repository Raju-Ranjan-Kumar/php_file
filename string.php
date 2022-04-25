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
        $str="This is Raju";
        echo $str,"<br>";
        $str1=strlen($str);
        echo "string length is:". $str1,"<br>";     //here dot is work canatination
        echo "The number of words in string is: ".str_word_count($str),"<br>";
        echo "The reverse of words in string is: ".strrev($str);
    ?>
</body>
</html>