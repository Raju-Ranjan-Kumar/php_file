<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php connection</title>
</head>
<body>
    <?php
        echo "We create a connection to a database using mysql <br>";
        /*two ways to conect database to a mysql
        1. Mysqli extension
        2. PDO*/
        $servername="localhost";
        $username="root";
        $password="";
        $con=mysqli_connect($servername,$username,$password);
        //die if connection was not successful
        if(!$con){
            die("Sorry we field to connect:". mysqli_connect_error());
        }else{
            echo "Connection was successful <br>";
        }
    ?>
</body>
</html>