<!DOCTYPE html>
<html class="supernova">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:description" content="Please click the link to complete this form." >
    <link rel="canonical" href="https://form.jotform.com/220822118029448" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <meta name="HandheldFriendly" content="true" />
    <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
    <title>Registration Form</title>
    <style>
      .form-all{border-radius:22px;}
      #btn{background-color:red; float:right; width: 71px; height: 29px; border-radius:8px; margin-top:10px; }
      .log{color:white; font-weight:bold;}
      .error{ color: red; }
    </style>
  </head>
<body>
  <?php
    include('db_con.php');
    session_start();
    $useremail= $_SESSION['Email'];
    if ($useremail==true) {
        
    }else{
      header('location:Signin.php');
    }
  ?>
  <form class="jotform-form" action="" method="post" name="" id="220822118029448" onsubmit="return validate()">
    <div role="main" class="form-all">
      <ul class="form-section page-section">
        <li id="cid_1" class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-large">
            <div class="header-text httal htvam">
              <button name="button" id="btn"> <a href="Logout.php" class="log" >Logout</a> </button>
              <h1 id="header_1" class="form-header" data-component="header"> Please insert your data </h1>
              <div id="subHeader_1" class="form-subHeader"> Fill out the form carefully</div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_fullname" id="id_4">
          <label class="form-label form-label-top form-label-extended form-label-auto" id="label_4" for="first_4"> Student Name </label>
          <div id="cid_4" class="form-input-wide" data-layout="full">
            <input type="text" id="name" name="name" class="form-textbox" autoComplete="section-input_4 given-name" size="10" placeholder="Your Name" data-component="first" aria-labelledby="label_4 sublabel_4_first" /><br>
            <span id="u_name" class="error"></span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_email" id="id_6">
          <label class="form-label form-label-top" id="label_6" for="input_6"> Student E-mail </label>
          <div id="cid_6" class="form-input-wide" data-layout="half">
            <input type="email" id="email" name="email" class="form-textbox validate[Email]" style="width:310px" size="310" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" /><br>
            <span id="u_email" class="error"></span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_date" id="id_24">
          <span class="form-sub-label-container" style="vertical-align:top">  
            <label class="form-label form-label-top" id="label_24" for="input_24"> Birth date </label>
            <div id="cid_24" class="form-input-wide" data-layout="full">
              <input type="date" id="dob" name="dob" style="width:310px; height: 40px;" size="310px;" placeholder="dd-mm-yy" data-component="number" aria-labelledby="label_24 sublabel_input_24" /><br>
              <span id="u_dob" class="error"></span>
            </div>   
          </span>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_age" id="id_24">
          <span class="form-sub-label-container" style="vertical-align:top">  
            <label class="form-label form-label-top" id="label_24" for="input_24"> Age </label>
            <div id="cid_24" class="form-input-wide" data-layout="full">
              <input type="number" id="age" name="age" style="width:310px; height: 40px;" size="310px;" placeholder="Age" data-component="number" aria-labelledby="label_24 sublabel_input_24" /><br>
              <span id="u_age" class="error"></span>
            </div>   
          </span>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3">
          <label class="form-label form-label-top" id="label_3" for="input_3"> Gender </label>
          <div id="cid_3" class="form-input-wide" data-layout="half">
            <select class="form-dropdown" id="gender" name="gender" style="width:310px" data-component="dropdown">
              <option value="">Select Gender</option>
              <option value="Male"> Male </option>
              <option value="Female"> Female </option>
              <option value="N/A"> N/A </option>
            </select>  <br>  <span id="u_gender" class="error"></span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3">
          <label class="form-label form-label-top" id="label_3" for="input_3"> Course </label>
          <div id="cid_3" class="form-input-wide" data-layout="half">
            <select class="form-dropdown" id="course" name="course" style="width:310px" data-component="dropdown">
              <option value="">Select Course</option>
              <option value="BCA"> BCA </option>
              <option value="MCA"> MCA </option>
              <option value="BBA"> BBA </option>
              <option value="MBA"> MBA </option>
              <option value="B.Sc"> B.Sc </option>
              <option value="B.Sc"> BSc.Cs </option>
              <option value="M.Sc"> M.Sc </option>
              <option value="BA"> BA </option>
              <option value="MA"> MA </option>
              <option value="B.Com"> B.Com </option>
              <option value="M.Com"> M.Com </option>
              <option value="B.tech"> B.tech</option>
            </select>  <br>   <span id="u_course" class="error"></span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_27">
          <label class="form-label form-label-top" id="label_27" for="input_27_full"> Mobile Number </label>
          <div id="cid_27" class="form-input-wide" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="mobile" name="mobile" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_27 tel-national" style="width:310px" data-masked="true" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_27" /><br>
              <span id="u_mo" class="error"></span>
              <label class="form-sub-label is-empty" for="input_27_full" id="sublabel_27_masked" style="min-height:13px" aria-hidden="false">  </label>
            </span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_27">
          <label class="form-label form-label-top" id="label_27" for="input_27_full"> Aadhar Number </label>
          <div id="cid_27" class="form-input-wide" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="aadhar" name="aadhar" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" autoComplete="section-input_27 tel-national" style="width:310px" data-masked="true" placeholder="(0000) 0000-0000" data-component="phone" aria-labelledby="label_27" /><br>
              <span id="u_ad" class="error"></span>
              <label class="form-sub-label is-empty" for="input_27_full" id="sublabel_27_masked" style="min-height:13px" aria-hidden="false">  </label>
            </span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_zip" id="id_24">
          <span class="form-sub-label-container" style="vertical-align:top">  
            <label class="form-label form-label-top" id="label_24" for="input_24"> Pin Code </label>
            <div id="cid_24" class="form-input-wide" data-layout="full">
              <input type="number" id="pin" name="pin" style="width:310px; height: 40px;" size="310px;" placeholder="Pin Code" data-component="number" aria-labelledby="label_24 sublabel_input_24" /><br>
              <span id="u_pin" class="error"></span>
            </div>   
          </span>
        </li>
        <li class="form-line" data-type="control_address" id="id_23">
          <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23_addr_line1"> Address </label>
          <div id="cid_23" class="form-input-wide" data-layout="full">
            <div summary="" class="form-address-table jsTest-addressField">
              <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                <span class="form-address-line form-address-street-line jsTest-address-lineField">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="text" id="address" name="address" class="form-textbox form-address-line"autoComplete="section-input_23 address-line1" data-component="address_line_1" aria-labelledby="label_23 sublabel_23_addr_line1"/><br>
                    <span id="u_addr" class="error"></span>
                  </span>
                </span>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_45">
          <label class="form-label form-label-top form-label-auto" id="label_45" for="input_45"> Additional Comments </label>
          <div id="cid_45" class="form-input-wide" data-layout="full">
            <input id="comment" class="form-textarea" name="comment" style="width:648px;height:160px" data-component="textarea" aria-labelledby="label_45"><br>
            <span id="u_comm" class="error"></span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_button" id="id_20">
          <div id="cid_20" class="form-input-wide" data-layout="full">
            <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
              <button id="input_20" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" name="submit"> Submit Data </button>
            </div>
          </div>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_button" id="id_19">
          <div id="cid_19" class="form-input-wide" data-layout="full">
            <div data-align="right" class="form-buttons-wrapper form-buttons-right   jsTest-button-wrapperField">
              <button id="input_19" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button"> Clear Fields </button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
  <?php
    error_reporting(0);
    if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $dob=$_POST['dob'];
      $age=$_POST['age'];
      $gender=$_POST['gender'];
      $course=$_POST['course'];
      $mo=$_POST['mobile'];
      $adhar=$_POST['aadhar'];
      $pin=$_POST['pin'];
      $address=$_POST['address'];
      $comment=$_POST['comment'];

      if($age>5){
        if ($name!="" && $email!="" && $dob!="" &&  $age!="" && $gender!="" && $course!="" && $mo!="" && $adhar!="" && $pin!="" && $address!="" &&   $comment!="") {
          $sql="insert into student(Name,Email,DOB,Age,Gender,Course,Mo_no,Aadhar,Pin,Address,Comment)  values ('$name','$email','$dob','$age','$gender','$course','$mo','$adhar','$pin','$address','$comment')";
          $query=mysqli_query($con,$sql);

          if($query){
            // echo "<script> alert('data inserted successfully') </script>";
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
        let gender = document.getElementById("gender");
        let course = document.getElementById("course");
        let mo = document.getElementById("mobile");
        let aadhar = document.getElementById("aadhar");
        let pin = document.getElementById("pin");
        let add = document.getElementById("address");
        let com = document.getElementById("comment");
        let flag=1;
        
        //Name section
        if(name.value==""){
          document.getElementById("u_name").innerHTML="**Please enter your Name!";
          flag= 0;
        }else if (name.value.length<3) {
          document.getElementById("u_name").innerHTML="**Student Name is required minimum 3 charactor";
          flag=0;
        }else{
          document.getElementById("u_name").innerHTML="";
          flag=1;
        }
        //Email section
        let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(email.value==""){
          document.getElementById("u_email").innerHTML="**Please enter your email Address!";
        }else if(email.value.match(mailformat)){
          return true;
        }
        else{
          document.getElementById("u_email").innerHTML="**Invalid email address!";
        }
        // //dob section
        if(dob.value.length==""){
          document.getElementById("u_dob").innerHTML="**Please enter your DOB!";
          flag= 0;
        }else{
          document.getElementById("u_dob").innerHTML="";
          flag=1;
        }
        // //Age section
        if(age.value==""){
          document.getElementById("u_age").innerHTML="**Please enter your Age!";
          flag=0;
        }
        else if(age.value==0){
          document.getElementById("u_age").innerHTML="**Please enter your valid age!";
          flag=0;
        }else{
          document.getElementById("u_age").innerHTML="";
          flag=1;
        }
        //Gender section
        if(gender.value==""){
          document.getElementById("u_gender").innerHTML="**Please select your gender!";
          flag=0;
        }else{
          document.getElementById("u_gender").innerHTML="";
          flag=1;
        }
        //Course section
        if(course.value==""){
          document.getElementById("u_course").innerHTML="**Please select your Course!";
          flag= 0;
        }else{
          document.getElementById("u_course").innerHTML="";
          flag=1;
        }
        //Mo.no section
        if(mo.value==""){
          document.getElementById("u_mo").innerHTML="**Please enter your Mo no!";
          flag=0;
        }
        else if(mo.value.length<=9){
          document.getElementById("u_mo").innerHTML="**Mo no is required 10 digit!";
          flag=0;
        }else if(mo.value.length>10){
          document.getElementById("u_mo").innerHTML="**Mo no is not grater than 10 digit!";
          flag=0;
        }else{
          document.getElementById("u_mo").innerHTML="";
          flag=1;
        }
        //Aadhar section
        if(aadhar.value==""){
          document.getElementById("u_ad").innerHTML="**Please enter your Aadhar no!";
          flag=0;
        }
        else if(aadhar.value.length<=11){
          document.getElementById("u_ad").innerHTML="**Aadhar no is required 12 digit!";
          flag=0;
        }else if(aadhar.value.length>12){
          document.getElementById("u_ad").innerHTML="**Aadhar no is not grater than 12 digit!";
          flag=0;
        }else{
          document.getElementById("u_ad").innerHTML="";
          flag=1;
        }
        //Pin section
        if(pin.value==""){
          document.getElementById("u_pin").innerHTML="**Please enter your area pin no!";
          flag=0;
        }else if(pin.value.length<6){
          document.getElementById("u_pin").innerHTML="**pin no is required 6 digit";
          flag=0;
        }else if(pin.value.length>6){
          document.getElementById("u_pin").innerHTML="**pin no is not gratter than 6 digit";
          flag=0;
        }else{
          document.getElementById("u_pin").innerHTML="";
          flag=1;
        }
        //Address section
        if(add.value==""){
          document.getElementById("u_addr").innerHTML="**Please enter your Address!";
          flag=0;
        }else{
          document.getElementById("u_addr").innerHTML="";
          flag=1;
        }
        //Comment section
        if(com.value==""){
          document.getElementById("u_comm").innerHTML="**Please write your comment!";
          flag=0;
        }else{
          document.getElementById("u_comm").innerHTML="";
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