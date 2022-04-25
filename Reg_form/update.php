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
    <title>Update Record</title>
    <style>
        .form-all{border-radius:22px;}
        .header-large .form-header {
            text-align: center;
            text-decoration-line: underline;
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
  <form class="jotform-form" action="" method="post" name="" id="220822118029448" accept-charset="utf-8" onsubmit="return validate()">
    <div role="main" class="form-all">
      <ul class="form-section page-section">
        <li id="cid_1" class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-large">
            <div class="header-text httal htvam">
              <h1 id="header_1" class="form-header" data-component="header"> Update your record </h1>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_fullname" id="id_4">
          <label class="form-label form-label-top form-label-extended form-label-auto" id="label_4" for="first_4"> Student Name </label>
          <div id="cid_4" class="form-input-wide" data-layout="full">
            <div data-wrapper-react="true" class="extended">
              <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                <input type="text" id="name" name="name" class="form-textbox" autoComplete="section-input_4 given-name" size="10" value="<?php echo $row['Name'];?>" placeholder="Your Name" data-component="first" aria-labelledby="label_4 sublabel_4_first" />
              </span>
            </div>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_email" id="id_6">
          <label class="form-label form-label-top" id="label_6" for="input_6"> Student E-mail </label>
          <div id="cid_6" class="form-input-wide" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="email" id="email" name="email" class="form-textbox validate[Email]" style="width:310px" size="310" value="<?php echo $row['Email'];?>" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" />
            </span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_age" id="id_24">
          <span class="form-sub-label-container" style="vertical-align:top">  
            <label class="form-label form-label-top" id="label_24" for="input_24"> Birth date </label>
            <div id="cid_24" class="form-input-wide" data-layout="full">
              <input type="date" id="dob" name="dob" style="width:310px; height: 40px;" size="310px;" value="<?php echo $row['DOB'];?>" placeholder="dd-mm-yy" data-component="number" aria-labelledby="label_24 sublabel_input_24" />
            </div>   
          </span>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_age" id="id_24">
          <span class="form-sub-label-container" style="vertical-align:top">  
            <label class="form-label form-label-top" id="label_24" for="input_24"> Age </label>
            <div id="cid_24" class="form-input-wide" data-layout="full">
              <input type="number" id="age" name="age" style="width:310px; height: 40px;" size="310px;" value="<?php echo $row['Age'];?>" placeholder="Age" data-component="number" aria-labelledby="label_24 sublabel_input_24" />
            </div>   
          </span>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3">
          <label class="form-label form-label-top" id="label_3" for="input_3"> Gender </label>
          <div id="cid_3" class="form-input-wide" data-layout="half">
            <input type="text" id="gender" name="gender" style="width:310px; height: 40px;" size="310px;" value="<?php echo $row['Gender'];?>" placeholder="Gender" data-component="text" aria-labelledby="label_24 sublabel_input_24" />
          </div>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3">
          <label class="form-label form-label-top" id="label_3" for="input_3"> Course </label>
          <div id="cid_3" class="form-input-wide" data-layout="half">
            <input type="text" id="course" name="course" style="width:310px; height: 40px;" size="310px;" value="<?php echo $row['Course'];?>" placeholder="Course" data-component="text" aria-labelledby="label_24 sublabel_input_24" />
          </div>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_27">
          <label class="form-label form-label-top" id="label_27" for="input_27_full"> Mobile Number </label>
          <div id="cid_27" class="form-input-wide" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="mobile" name="mobile" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]"  autoComplete="section-input_27 tel-national" style="width:310px" data-masked="true" value="<?php echo $row['Mo_no'];?>" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_27" />
            </span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_27">
          <label class="form-label form-label-top" id="label_27" for="input_27_full"> Aadhar Number </label>
          <div id="cid_27" class="form-input-wide" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="number" id="aadhar" name="aadhar" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" autoComplete="section-input_27 tel-national" style="width:310px" data-masked="true" value="<?php echo $row['Aadhar'];?>" data-component="phone" aria-labelledby="label_27" />
            </span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_age" id="id_24">
          <span class="form-sub-label-container" style="vertical-align:top">  
            <label class="form-label form-label-top" id="label_24" for="input_24"> Pin Code </label>
            <div id="cid_24" class="form-input-wide" data-layout="full">
              <input type="number" id="pin" name="pin" style="width:310px; height: 40px;" size="310px;" value="<?php echo $row['Pin'];?>" placeholder="Pin Code" data-component="number" aria-labelledby="label_24 sublabel_input_24" />
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
                    <input type="text" id="address" name="address" class="form-textbox form-address-line"autoComplete="section-input_23 address-line1" value="<?php echo $row['Address'];?>" data-component="address_line_1" aria-labelledby="label_23 sublabel_23_addr_line1" required="" />
                  </span>
                </span>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_45">
          <label class="form-label form-label-top form-label-auto" id="label_45" for="input_45"> Additional Comments </label>
          <div id="cid_45" class="form-input-wide" data-layout="full">
            <!-- <textarea id="comment" class="form-textarea" name="comment" value="<?php echo $row['Comment'];?>" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_45"></textarea> -->
            <input type="text" id="comment" class="form-textarea" name="comment" value="<?php echo $row['Comment'];?>" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_45" />
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_button" id="id_20">
          <div id="cid_20" class="form-input-wide" data-layout="full">
            <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
              <button id="input_20" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" name="submit"> Update Data </button>
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
       if(isset($_POST['submit'])){
            $id=$_GET['id'];
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
                $changes="UPDATE student SET  Name='$name',Email='$email',DOB='$dob',Age='$age',Gender='$gender',Course='$course',Mo_no='$mo',Aadhar='$adhar',Pin='$pin',Address='$address',Comment='$comment' WHERE Id='$id'";
                $update=mysqli_query($con,$changes);
                if ($update) {
                  // echo "<script> alert('Record updated sucessfully')</script> ";
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