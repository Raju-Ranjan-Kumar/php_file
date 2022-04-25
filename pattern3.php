<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern-3*</title>
    <style>
        span{font-size:18px; padding:2px;}
    </style>
</head>
<body>
    <?php
        function pattern(){
            for ($i = 0; $i < 5; $i++){
                for($k = 5; $k > $i+1; $k-- ){
                   echo "&nbsp;&nbsp;";
                }
                for($j = 0; $j <= $i; $j++ ){
                   echo "<span>* </span>";
                }
                echo "<br>";
            }
            for ($i = 5-1; $i > 0; $i--){
                for($k = 5-1; $k >= $i; $k-- ){
                   echo "&nbsp;&nbsp;";
                }
                for($j = 0; $j < $i; $j++ ){
                   echo "<span>* </span>";
                }
                echo "<br>";
            }
        }
        pattern();
    ?>
</body>
</html>