<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a data by using form  through insert query</title>
    <style>
        *{margin:0; padding:0;}
        h1{text-align:center; font-weight:bold; text-decoration:underline; color:green; font-size:40px;}
        div{ margin:auto;}
        #container{border:4px solid blue; width:26%; padding:25px; margin-top:20px; background-color:aliceblue; border-radius:12px; text-align:center;}
        input{height: 26px; border-radius: 8px;}
        #dob{width:175px;}
        #submit{width:75px; height:32px; background-color:green; color:white; font-weight:bold;}
        #image{width:190px; height:26px; border-radius:8px; text-align:center; border:2px solid black;}
        .span{color: red; text-align: center;}
    </style>
</head>
<body>
   <h1>Enter your details here</h1> 
    <div id="container">
        <form action="" method="POST" name="Hos_Mang" onsubmit="return validate()">
            Patient_Name: <input type="text" name="name" id="name"><br><span id="p_name" class="span"></span> <br>
            DOB: &nbsp;&nbsp; <input type="date" name="dob" id="dob"> <br><span id="p_dob" class="span"></span> <br>
            Gender:&nbsp; <input type="text" name="gender" id="gender"> <br><span id="p_gender" class="span"></span> <br>
            Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="age" id="age"> <br><span id="p_age" class="span"></span> <br>
            Mo_no:&nbsp; <input type="number" name="mono" id="mo"> <br><span id="p_mo" class="span"></span> <br>
            Aadhar_No: <input type="number" name="adno" id="aadhar"> <br><span id="p_ad" class="span"></span> <br>
            Address:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="address" id="address"> <br><span id="p_addr" class="span"></span> <br>
            Image:&nbsp;&nbsp; <input type="file" name="image" id="image"> <br><span id="p_img" class="span"></span> <br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
    <?php
        include('db_connection.php');
        error_reporting(0);
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $age=$_POST['age'];
            $mo=$_POST['mono'];
            $adhar=$_POST['adno'];
            $address=$_POST['address'];
            $img=$_FILES['image'];

            if ( $name!="" && $dob!="" && $gender!="" && $age!="" && $mo!="" && $adhar!="" && $address!="" && $img!="") {
                $sql="insert into card_table(Patient_Name,DOB,Gender,Age,Mo_no,Aadhar_No,Address,Image)  values ('$name','$dob','$gender','$age','$mo','$adhar','$address','$img')";
                $query=mysqli_query($con,$sql);

                if($query){
                    echo "<script> alert('data inserted successfully') </script>";
                    // header('location:dataprintTable.php');
                }
            }else{
    ?>    
        <script>
            function validate(){
              let p_name=document.getElementById("name");
              let Dob=document.getElementById("dob");
              let Gender=document.getElementById("gender");
              let Age=document.getElementById("age");
              let Mo=document.getElementById("mo");
              let Aadhar=document.getElementById("aadhar");
              let Add=document.getElementById("address");
              let Img=document.getElementById("image");
              let flag=1;
               
              //Name section
               if(p_name.value==""){
                  document.getElementById("p_name").innerHTML="**Patient Name is empty!";
                  flag= 0;
                }else if (p_name.value.length<3) {
                  document.getElementById("p_name").innerHTML="**Patient Name is required minimum 3 charactor";
                  flag=0;
                }else{
                  document.getElementById("p_name").innerHTML="";
                  flag=1;
                }
               //dob section
                if(Dob.value.length==""){
                  document.getElementById("p_dob").innerHTML="**Please select your DOB!";
                  flag= 0;
                }else{
                  document.getElementById("p_dob").innerHTML="";
                  flag=1;
                }
                //Gender section
                if(Gender.value==""){
                  document.getElementById("p_gender").innerHTML="**Please enter your gender!";
                  flag=0;
                
                }else{
                   document.getElementById("p_gender").innerHTML="";
                   flag=1;
                }
                //Age section
                if(!Age.value){
                   document.getElementById("p_age").innerHTML="**Age is empty!";
                   flag=0;
                }
                else if(Age.value==0){
                   document.getElementById("p_age").innerHTML="**Please enter valid age!";
                   flag=0;
                }else{
                   document.getElementById("p_age").innerHTML="";
                   flag=1;
                }
                //Mo_no section
                if(!Mo.value){
                   document.getElementById("p_mo").innerHTML="**Mo no is empty!";
                   flag=0;
                }
                else if(Mo.value.length<10){
                   document.getElementById("p_mo").innerHTML="**Mo no is required 10 digit!";
                   flag=0;
                }else{
                   document.getElementById("p_mo").innerHTML="";
                   flag=1;
                }
                //Aadhar section
                if(!Aadhar.value){
                   document.getElementById("p_ad").innerHTML="**Aadhar no is empty!";
                   flag=0;
                }
                else if(Mo.value.length<12){
                   document.getElementById("p_ad").innerHTML="**Aadhar no is required 12 digit!";
                   flag=0;
                }else{
                   document.getElementById("p_ad").innerHTML="";
                   flag=1;
                }
                //Address section
                if(!Add.value){
                   document.getElementById("p_addr").innerHTML="**Please write your address!";
                   flag=0;
                }
                else if(Add.value.length>100){
                   document.getElementById("p_addr").innerHTML="**Address is no longer than 100 charactor!";
                   flag=0;
                }else{
                   document.getElementById("p_addr").innerHTML="";
                   flag=1;
                }
                //Image section
                if(Img.value==""){
                    document.getElementById("p_img").innerHTML="**Please insert your image!";
                    flag=0;
                }else{
                    document.getElementById("p_img").innerHTML="";
                   flag=1;
                }
                if (flag) {
                    return true;
                }else{
                    return false;
                }
            }
        </script>
    <?php
        }
      }
    ?>
    </body>
</html>