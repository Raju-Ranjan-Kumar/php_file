<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime no program</title>
</head>
<body>
    <form action="" method="post">
        <div id="container">
            <input type="text" name="number">
            <input type="submit" name="submit">
        </div>
    </form>
    <?php
        if(isset($_POST['submit'])){
            echo primeCheck($_POST['number']);
        }

        function primeCheck($number){
            $flag=0;
            for ($i = 2; $i<($number/2); $i++){
                if($number % $i == 0){
                    $flag=1;
                    break;
                }
            }
            if ($flag==1){
                echo "Number is not Prime";
            }else{
                echo "Number is Prime";
            }
        }
    ?>
</body>
</html>