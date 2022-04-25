<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data edit</title>
    <style>
        *{margin:0; padding:0;}
        body{ background-color:black; }
        div{ margin: auto; }
        #container{ border: 4px solid blue;  width:28%; padding: 20px 30px; margin-top: 20px; background-color: wheat; border-radius: 10px; text-align: center; }
        input{ height:24px; border-radius: 8px;}
        #submit{ width:60px; background-color:green;}
    </style>
</head>
<body>
    <?php
        include('db_connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM `card_table` WHERE `Id`=$id";
        
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
    ?>
    <div id="container">
        <form action="" method="POST">
            Id: <input type="number" name="id" value="<?php echo $_GET['id'];?>"> <br><br>
            Patient_Name: <input type="text" name="p_name" value="<?php echo $row['Patient_Name'];?>"> <br><br>
            DOB: &nbsp;&nbsp; <input type="date" name="dob" value="<?php echo $row['DOB'];?>"> <br><br>
            Gender:&nbsp; <input type="gender" name="gender" value="<?php echo $row['Gender'];?>"> <br><br>
            Age:&nbsp;&nbsp;&nbsp; <input type="age" name="age" value="<?php echo $row['Age'];?>"> <br><br>
            Mo_no:&nbsp; <input type="age" name="mono" value="<?php echo $row['Mo_no'];?>"> <br><br>
            Aadhar_No: <input type="aadhar" name="adno" value="<?php echo $row['Aadhar_No'];?>"> <br><br>
            Address:&nbsp;&nbsp; <input type="text" name="address" value="<?php echo $row['Address'];?>"> <br><br>
            Image:&nbsp;&nbsp; <input type="file" name="image" value="<?php echo $row['Image'];?>"> <br><br>
            <input type="submit" name="submit" id="submit" value="update">
        </form>
    </div>
    <?php
       if(isset($_POST['submit'])){
           $pid=$_GET['id'];
           $pname=$_POST['p_name'];
           $dob=$_POST['dob'];
           $gender=$_POST['gender'];
           $age=$_POST['age'];
           $mono=$_POST['mono'];
           $adno=$_POST['adno'];
           $add=$_POST['address'];
           $img=$_POST['image'];

           $changes="UPDATE card_table SET  Patient_Name='$pname',DOB='$dob',Gender='$gender',Age=' $age',Mo_no='$mono',Aadhar_No='$adno',Address='$add', Image=' $img' WHERE  Id='$pid'";
           $update=mysqli_query($con,$changes);
           if ($update) {
               echo "<font color='blue'>record updated sucessfully";
               header('location:dataprintTable.php');
            }else{
               echo "<font color='red'>record not updated";
            }
        }else{
          echo "<font color='white'>click on update button to save changes";
        }  
    ?>
</body>
</html>