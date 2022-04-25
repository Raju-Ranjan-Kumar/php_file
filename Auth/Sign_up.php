<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            /* background-color:brown; */
            background-image: url('CodeAegis.jpg');
            background-size: cover;
        }
        h1{
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            color:blue;
            font-size:40px;
        }
        div{
            margin: auto;
        }
        #container{
            border: 4px solid blue;
            width: 26%;
            padding: 20px 30px;
            margin-top: 20px;
            background-color: wheat;
            border-radius: 10px;
            text-align: center;
            opacity: 0.8;
        }
        input{
            height: 26px;
            border-radius: 8px;
        }
        #submit{
            width: 60px;
            background-color: green;
        }
    </style>
</head>
<body>
    <h1>Sign-up</h1>
    <div id="container">
        <form action="" method="POST">
            Name: <input type="text" name="u_name" id="name"><br><br>
            Email:&nbsp; <input type="email" name="email" id="email" ><br><br>
            Password: <input type="password" name="password" id="password"><br><br>
            <input id="submit" name="submit" type="submit" onclick='return checkcreate()'> 
        </form>
    </div>
    <script>
       function checkcreate(){
        return confirm('Are you really want to create your account...??');
        }
    </script>
    <?php
        include('db_connection.php');
        error_reporting(1);
        if(isset($_POST['submit'])){
            $name=$_POST['u_name'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            if(mysqli_num_rows(mysqli_query($con,"select * from users_table where Name='$name'"))>0){
                echo "<script> alert('User name already present')</script>";
            }else{
                $password=password_hash($password,PASSWORD_DEFAULT);
                $sql="insert into users_table(Name,Email,Password) values('$name','$email','$password')";
                $query=mysqli_query($con,$sql);
                echo "<script> alert('You have sucessfully created your account')</script>"; 
                header('location:Login.php');
            }
        }    
    ?>
    </body>
</html>