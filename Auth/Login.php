<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url('background.jpg');
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
            width: 28%;
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
    <h1>Log-in</h1>
    <div id="container">
        <form action="" method="POST">
            User_name: <input type="text" name="u_name" id="name"><br><br>
            Password:&nbsp;&nbsp; <input type="password" name="password" id="password"><br><br>
            <input id="submit" name="submit" type="submit" > 
        </form>
    </div>
    
    <?php
        session_start();
        include('db_connection.php');
        error_reporting(0);
        if(isset($_POST['submit'])){
            $name=$_POST['u_name'];
            $password=$_POST['password'];

            $res=mysqli_query($con,"select * from users_table where User_name='$name'");
            if(mysqli_num_rows($res)>0){
               $row=mysqli_fetch_assoc($res);
               $veryfy=password_verify($password,$row['Password']);
               if($veryfy==1){
                   $_SESSION['IS_LOGIN']=true;
                   $_SESSION['UNAME']=$name;
                   header('location:Dashboard.php');
                   die();
                }else{
                   echo "<script> alert('please enter correct password')</script>";
                }
            }else{
               echo "<script> alert('please enter correct user name')</script>";
            }
        }    
    ?>
    </body>
</html>