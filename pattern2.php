<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern-2*</title>
</head>
<body>
    <h1>Pattern in php</h1>
    <?php
        function pattern($n){
            for ($i = 5; $i > $n; $i--){
                for($j = 1; $j <= $i; $j++ ){
                    echo "* ";
                }
                echo "<br>";
            }
        }

        $n = 0;
        pattern($n);
    ?>
</body>
</html>