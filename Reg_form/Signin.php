<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .signup-image-link {margin-top: 100px;}
        .container { width: 880px;}
    </style>
</head>
<body>
    <!-- Sing in  Form -->
    <div  class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing in image"></figure>
                        <a href="Signup.php" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="fa fa-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Your Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="www.facebook.com" class="fa fa-facebook"></a></li>
                                <li><a href="www.twitter.com" class="fa fa-twitter"></a></li>
                                <li><a href="www.google.com" class="fa fa-google"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
        session_start();
        include('db_con.php');
        error_reporting(0);
        if(isset($_POST['signin'])){
            $email=$_POST['email'];
            $password=$_POST['your_pass'];

            $query="select * from sign_up where Email='$email'";
            $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>0){
               $row=mysqli_fetch_assoc($res);
               $veryfy=password_verify($password,$row['Conf_password']);
               if($veryfy==1){
                    if($row['Status']=="Admin"){
                        $_SESSION['IS_LOGIN']=true;
                        $_SESSION['Email']=$email;
                        // echo "<script> alert('You have sucessfully login!')</script>";
                        header('location:Home.php');
                    }else{
                        echo "<script> alert('You are not an admin!')</script>";
                    }
                }else{
                   echo "<script> alert('please enter correct password!')</script>";
                }
            }else{
                echo "<script> alert('please enter correct email!')</script>";
            }
        }    
    ?>
</body>
</html>