<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a data by using form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color:white;
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
            width: 35%;
            padding: 20px 30px;
            margin-top: 20px;
            background-color: wheat;
            border-radius: 10px;
            text-align: center;
        }
        input{
            height: 26px;
            border-radius: 8px;
        }
        #course{
            height: 26px;
            border-radius: 8px;
            width: 145px;
        }
        #submit{
            width: 60px;
            background-color: green;
        }
        #reset{
            width: 60px;
            background-color: red;
        }
    </style>
</head>
<body>
   <h1>Welcome to the CodeAegis</h1> 
    <div id="container">
        <form action="" method="GET">
            Id: <input type="number" name="id"> <br><br>
            Name: <input type="text" name="u_name"> <br><br>
            Email: <input type="email" name="u_email"><br><br>
            DOB: &nbsp;<input type="date" name="dob"> <br><br>
            Course:&nbsp;
                <select id="course" name="qualification">
                    <option disabled selected value="0">--Select Course--</option>
                    <option value="bca"> BCA </option>
                    <option value="mca"> MCA </option>
                    <option value="bba"> BBA </option>
                    <option value="mba"> MBA </option>
                    <option value="b.sc"> B.Sc </option>
                    <option value="m.sc"> M.Sc </option>
                    <option value="ba"> BA </option>
                    <option value="ma"> MA </option>
                    <option value="bcom"> B.Com </option>
                    <option value="m.com"> M.Com </option>
                    <option value="b.tech"> B.tech</option>
                </select><br><br>
            Gender:&nbsp; <input type="radio" name="gender">Male 
                <input type="radio" name="gender">Female <br><br>
            Age:&nbsp;&nbsp; <input type="age" name="age"> <br><br>
            Password: <input type="password" name="password"> <br><br>
            <input name="submit" type="submit" id="submit"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="reset" type="reset" id="reset">
        </form>
    </div>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="form";

        $con=mysqli_connect($servername,$username,$password,$database);

        if($con){
            echo "Connection was successful <br>";
        }else{
            die("Sorry we faild to connect because:". mysqli_connect_error());
        }
        error_reporting(0);

        if($_GET['submit']){
            $uid=$_GET['id'];
            $name=$_GET['u_name'];
            $email=$_GET['u_email'];
            $dob=$_GET['dob'];
            $course=$_GET['qualification'];
            $gender=$_GET['gender'];
            $age=$_GET['age'];
            $password=$_GET['password'];

            if ($uid!="" && $name!="" && $email!="" && $dob!="" && $course!="" && $gender!="" && $age!="" && $password!="") {
                $sql="insert into take_input  values ('$uid','$name','$email','$dob','$course','$gender','$age','$password')";
                $query=mysqli_query($con,$sql);

                if($query){
                    echo "data inserted successfully";
                }
            }
            else{
                echo "All fields are required";
            }
        }
    ?>
</body>
</html>