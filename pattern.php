<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern-*</title>
</head>
<body>
    <h1>Pattern in php</h1>
    <?php
        function pattern($n){
            for ($i = 0; $i < $n; $i++){
                for($j = 0; $j <= $i; $j++ ){
                    echo "* ";
                }
                echo "<br>";
            }
        }

        $n = 5;
        pattern($n);
    ?>
</body>
</html>