//INSERT THE DATA
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Insert the data</title>
   <style>
      *{
         margin: 0;
         padding: 0;
      }
      body{
         background-color:brown;
      }
      h1{
         text-align: center;
         color:white;
         text-decoration:underline;
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
         border-radius: 12px;
         text-align: center;
      }
      input{
         height: 24px;
         border-radius: 8px;
      }
      #course{
         height: 24px;
         border-radius: 8px;
         width: 150px;
         text-align: center;
      }
      #submit{
         width: 65px;
         background-color: green;
         text-align: center;
      }
      .span{
         color: red;
      }
   </style>
</head>
<body>
   <h1>Enter Your Details</h1> 
   <div id="container">
      <form action="" method="POST" onsubmit="return validate()">
         Name: <input type="text" name="name" id="name"><br><span id="s_name" class="span"></span> <br>
         Email: <input type="email" name="email" id="email"><br><span id="s_email" class="span"></span> <br>
         DOB: &nbsp;&nbsp; <input type="date" name="dob" id="dob"> <br><span id="s_dob" class="span"></span> <br>
         Age:&nbsp;&nbsp;&nbsp; <input type="number" name="age" id="age"> <br><span id="s_age" class="span"></span> <br>
         Course:&nbsp;
            <select id="course" name="course">
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
            </select> <br><span id="s_course" class="span"></span> <br>
         Gender:&nbsp; <input type="text" name="gender" id="gender"> <br><span id="s_gender" class="span"></span> <br>
         Mo_no:&nbsp; <input type="number" name="mono" id="mono"> <br><span id="s_mo" class="span"></span> <br>
         Aadhar: <input type="number" name="aadhar" id="aadhar"> <br><span id="s_ad" class="span"></span> <br>
         Address: <input type="text" name="address" id="address"> <br><span id="p_addr" class="span"></span> <br>
         <input type="submit" name="submit" id="submit">
      </form>
   </div>
      <?php
         session_start();
         include('db_con.php');
         $useremail= $_SESSION['Email'];
         if ($useremail==true) {
             
         }else{
            header('location:Signin.php');
         }
         
         error_reporting(0);
         if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $dob=$_POST['dob'];
            $age=$_POST['age'];
            $course=$_POST['course'];
            $gender=$_POST['gender'];
            $mo=$_POST['mono'];
            $adhar=$_POST['aadhar'];
            $address=$_POST['address'];

            if($age>5){
               if ($name!="" && $email!="" && $dob!="" &&  $age!="" && $course!="" && $gender!="" && $mo!="" && $adhar!="" && $address!="") {
                  $sql="insert into student(Name,Email,DOB,Age,Course,Gender,Mo_no,Aadhar,Address)  values ('$name','$email','$dob','$age','$course','$gender','$mo','$adhar','$address')";
                  $query=mysqli_query($con,$sql);

                  if($query){
                     echo "<script> alert('data inserted successfully') </script>";
                     header('location:Print.php');
                  }
               }
            }else{
               echo "<script> alert('You are not able to insert data') </script>";
            }
         }
      ?>    
      <script>
         function validate(){
            let name = document.getElementById("name");
            let email = document.getElementById("email");
            let dob = document.getElementById("dob");
            let age = document.getElementById("age");
            let course = document.getElementById("course");
            let gender = document.getElementById("gender");
            let mo = document.getElementById("mono");
            let aadhar = document.getElementById("aadhar");
            let add = document.getElementById("address");
            let flag=1;
            
            //Name section
            if(name.value==""){
               document.getElementById("s_name").innerHTML="**Please enter your Name!";
               flag= 0;
            }else if (name.value.length<3) {
               document.getElementById("s_name").innerHTML="**Student Name is required minimum 3 charactor";
               flag=0;
            }else{
               document.getElementById("s_name").innerHTML="";
               flag=1;
            }
            //Email validation
            var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if(email.value.match(mailformat)){
               return true;
            }
            else{
               alert("Invalid email address!");
               return false;
            }
            //dob section
            if(dob.value.length==""){
               document.getElementById("s_dob").innerHTML="**Please enter your DOB!";
               flag= 0;
            }else{
               document.getElementById("s_dob").innerHTML="";
               flag=1;
            }
            //Age section
            if(age.value==""){
               document.getElementById("s_age").innerHTML="**Please enter your Age!";
               flag=0;
            }
            else if(age.value==0){
               document.getElementById("s_age").innerHTML="**Please enter your valid age!";
               flag=0;
            }else{
               document.getElementById("s_age").innerHTML="";
               flag=1;
            }
            //Course section
            if(course.value.length==""){
               document.getElementById("s_course").innerHTML="**Please select your Course!";
               flag= 0;
            }else{
               document.getElementById("s_course").innerHTML="";
               flag=1;
            }
            //Gender section
            if(gender.value==""){
               document.getElementById("s_gender").innerHTML="**Please enter your Gender!";
               flag=0;
            }else{
               document.getElementById("s_gender").innerHTML="";
               flag=1;
            }
            //Mo.no section
            if(mo.value==""){
               document.getElementById("s_mo").innerHTML="**Please enter your Mo no!";
               flag=0;
            }
            else if(mo.value.length<=9){
               document.getElementById("s_mo").innerHTML="**Mo no is required 10 digit!";
               flag=0;
            }else if(mo.value.length>10){
               document.getElementById("s_mo").innerHTML="**Mo no is not grater than 10 digit!";
               flag=0;
            }else{
               document.getElementById("s_mo").innerHTML="";
               flag=1;
            }
            //Aadhar section
            if(aadhar.value==""){
               document.getElementById("s_ad").innerHTML="**Please enter your Aadhar no!";
               flag=0;
            }
            else if(aadhar.value.length<=11){
               document.getElementById("s_ad").innerHTML="**Aadhar no is required 12 digit!";
               flag=0;
            }else if(aadhar.value.length>12){
               document.getElementById("s_ad").innerHTML="**Aadhar no is not grater than 12 digit!";
               flag=0;
            }else{
               document.getElementById("s_ad").innerHTML="";
               flag=1;
            }
            //Address section
            if(add.value==""){
               document.getElementById("p_addr").innerHTML="**Please enter your Address!";
               flag=0;
            }
            else if(add.value.length>100){
               document.getElementById("p_addr").innerHTML="**Address is no longer than 100 charactor!";
               flag=0;
            }else{
               document.getElementById("p_addr").innerHTML="";
               flag=1;
            }

            if (flag) {
               return true;
            }else{
               return false;
            }
         }
      </script>
   </body>
</html>



//UPDATE THE RECORD

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data edit</title>
    <link rel="stylesheet" href="css/style.css"> -->
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color:black;
        }
        h1{
            text-align: center;
            color:white;
            text-decoration:underline;
            font-size:37px;
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
            border-radius: 12px;
            text-align: center;
        }
        input{
            height: 24px;
            border-radius: 8px;
        }
        #submit{
            /* width: 65px; */
            background-color: green;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        include('db_con.php');
        $useremail= $_SESSION['Email'];
        if ($useremail==true) {
            
        }else{
           header('location:Signin.php');
        }
        
        $id = $_GET['id'];
        $query = "SELECT * FROM student WHERE Id='$id'";
        
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
    ?>
    <h1>Update Your Details</h1>
    <div id="container">
        <form action="" method="POST">
            Name: <input type="text" name="name" value="<?php echo $row['Name'];?>"> <br><br>
            Email: <input type="email" name="email" value="<?php echo $row['Email'];?>"> <br><br>
            DOB: &nbsp;&nbsp; <input type="date" name="dob" value="<?php echo $row['DOB'];?>"> <br><br>
            Age:&nbsp;&nbsp;&nbsp; <input type="number" name="age" value="<?php echo $row['Age'];?>"> <br><br>
            Course: <input type="text" name="course" value="<?php echo $row['Course'];?>"> <br><br>
            Gender:&nbsp; <input type="text" name="gender" value="<?php echo $row['Gender'];?>"> <br><br>
            Mo_no:&nbsp; <input type="number" name="mono" value="<?php echo $row['Mo_no'];?>"> <br><br>
            Aadhar: <input type="number" name="adno" value="<?php echo $row['Aadhar'];?>"> <br><br>
            Address:&nbsp;&nbsp; <input type="text" name="address" value="<?php echo $row['Address'];?>"> <br><br>
            <input type="submit" name="submit" id="submit" value="update">
        </form>
    </div>
    <?php
       if(isset($_POST['submit'])){
           $id=$_GET['id'];
           $name=$_POST['name'];
           $email=$_POST['email'];
           $dob=$_POST['dob'];
           $age=$_POST['age'];
           $course=$_POST['course'];
           $gender=$_POST['gender'];
           $mono=$_POST['mono'];
           $adno=$_POST['adno'];
           $add=$_POST['address'];
           
           if($age>5){
                $changes="UPDATE student SET  Name='$name',Email='$email',DOB='$dob',Age='$age',Course='$course',Gender='$gender',Mo_no='$mono',Aadhar='$adno',Address='$add' WHERE Id='$id'";
                $update=mysqli_query($con,$changes);
                if ($update) {
                    echo "<script> alert('Record updated sucessfully')</script> ";
                    header('location:Print.php');
                }
            }else{
               echo "<script> alert('Record not updated')</script> ";
            }
        }else{
          echo "<font color='white'>click on update button to save changes";
        }  
    ?>
</body>
</html>