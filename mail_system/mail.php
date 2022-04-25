<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
      
    function send_mail($to,$message,$subject,$name){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                         //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                      
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'babansingh121484@gmail.com';           //SMTP username
            $mail->Password   = '8873376263';                           //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('babansingh121484@gmail.com', 'Raju Ranjan Kumar');   
            $mail->addAddress($to, $name);                                         
            $mail->addReplyTo('babansingh121484@gmail.com', 'Admin');       

            //Content
            $mail->isHTML(true);                                          //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = '';

            $mail->send();
                return true;
        }catch(Exception $e) {
                return false;
        }
    }

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $msg=$_POST['msg'];
        
        $mail= send_mail($email,$msg,$subject,$name);            //call the function

        if($mail){
            echo "Mail has been sucessfully sent";
        }else{
            echo "mail has not been sent, somthing went wrong, please try again!";
        }
    }
?>