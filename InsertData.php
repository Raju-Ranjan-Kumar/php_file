<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a data using php & mysql</title>
</head>
<body>
    <?php
        echo "Insert a data using mysql query in php <br>";
        $servername="localhost";
        $username="root";
        $password="";
        $database="raju";
        $con=mysqli_connect($servername,$username,$password,$database);
        if($con){
            echo "Connection was successful <br>";
        }else{
            die("Sorry we field to connect because:". mysqli_connect_error());
        }
        $sql="insert into customer (name,dob,email)  values ('Raj','1999-04-18','Rahul@gmail.com')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo "data inserted successfully";
        }
    ?>
</body>
</html>