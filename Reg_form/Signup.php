<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .error{ color: red; }
        #servicequal{ height: 26px; width: 120px; border-radius: 8px; text-align:center;}
        .signup { margin-bottom:0px !important; margin-top:0px !important;}
        .signup-image-link { margin-top: 85px;}
        .container { width: 880px;}
        img {margin-top: 2.5rem; height: 330px;}
    </style>
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" onsubmit="return validate()">
                            <div class="form-group">
                                <label for="name"><i class="glyphicon glyphicon-user"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/><span id="u_name" class="error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/><span id="u_email" class="error"></span>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="fa fa-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/><span id="u_pas" class="error"></span>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fa fa-key icon"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/><span id="con_pas" class="error"></span>
                            </div>
                            <div class="form-group">
                                <select id="servicequal" name="status">
                                    <option disabled selected value="0">-- User status --</option>
                                    <option value="Admin"> Admin </option>
                                    <option value="User"> User </option>
                                </select> <span id="u_status" class="error"></span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="Signin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
        include('db_con.php');
        error_reporting(0);
        if(isset($_POST['signup'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['pass'];
            $cpass=$_POST['re_pass'];
            $status=$_POST['status'];

            if(mysqli_num_rows(mysqli_query($con,"select * from sign_up where Email='$email'"))>0){
                echo "<script> alert('This email already present')</script>";
            }else{
                $password=password_hash($password,PASSWORD_DEFAULT);
                $cpass=password_hash($cpass,PASSWORD_DEFAULT);
                $sql="insert into sign_up(Name,Email,Password,Conf_password,Status) values('$name','$email','$password','$cpass','$status')";
                $query=mysqli_query($con,$sql);
                // echo "<script> alert('You have sucessfully created your account!')</script>"; 
                header('location:Signin.php');
            }
        }    
    ?>
    <script>
        function validate(){
              let Name=document.getElementById("name");
              let Email=document.getElementById("email");
              let Password=document.getElementById("pass");
              let ConPass=document.getElementById("re_pass");
              let Status=document.getElementById("servicequal");
              let flag=1;
               
              //Name section
               if(Name.value==""){
                  document.getElementById("u_name").innerHTML="**User name is empty!";
                  flag= 0;
                }else if (Name.value.length<3) {
                  document.getElementById("u_name").innerHTML="**User name is required minimum 3 charactor";
                  flag=0;
                }else{
                  document.getElementById("u_name").innerHTML="";
                  flag=1;
                }
               //Email section
                let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if(Email.value==""){
                    document.getElementById("u_email").innerHTML="**Please enter email address!";
                }else if(Email.value.match(mailformat)){
                    return true;
                }
                else{
                    document.getElementById("u_email").innerHTML="**Invalid email address!";
                }
               //Password section
               if(Password.value==""){
                    document.getElementById("u_pas").innerHTML="**Password is empty!";
                    flag=0;
                }else if(Password.value.length<5){
                    document.getElementById("u_pas").innerHTML="**Password is to short!";
                    flag=0;
                }else{
                    document.getElementById("u_pas").innerHTML="";
                    flag=1;
                }
                //confirm password
                if(ConPass.value==""){
                    document.getElementById("con_pas").innerHTML="**Confirm Password is empty!";
                    flag=0;
                }else if(ConPass.value != Password.value){
                    document.getElementById("con_pas").innerHTML="**Confirm Password and password is not same!";
                    flag=0;
                }else{
                    document.getElementById("con_pas").innerHTML="";
                    flag=1;
                }
                //user status
                // if(Status.value==""){
                //     document.getElementById("u_status").innerHTML="**Please select atleast one option!";
                //     flag=0;
                // }else{
                //     document.getElementById("u_status").innerHTML="";
                //     flag=1;
                // }
                //Result check
                if (flag) {
                    return true;
                }else{
                    return false;
                }
            }
    </script>
</body>
</html>