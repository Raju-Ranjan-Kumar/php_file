<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern-4*</title>
</head>
<body>
    <?php
        function pattern(){
            for ($i = 5; $i > 0; $i--){
                for($j = 0; $j < $i; $j++ ){
                    echo " &nbsp;&nbsp;";
                }
                for($k = 5; $k >= $i; $k-- ){
                    echo " *";
                }
                echo "<br>";
            }
        }
        pattern();
    ?>
</body>
</html>