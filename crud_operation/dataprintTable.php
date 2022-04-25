<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print a data on table using select query</title>
    <style>
        body{background-color:white;}
        .container{background-color:aliceblue;}
        table,th,td{border:1px dotted black; text-align:center; font-size:16px; margin:auto; line-height:30px;}
        #stud{font-weight:bold; font-size:45px; text-decoration:underline; color:blue; text-align:center; padding:25px 0px;}
        tr:hover{background-color:black; color:white;}
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption id="stud">Patient's Details</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Patient_Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Mo_no</th>
                    <th>Aadhar_No</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th colspan="2">Operation</th>
                </tr>
            </thead> 
            <?php
            include('db_connection.php');
            $query="select * from card_table";

            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td> <?php echo $row['Id'];?></td>
                <td> <?php echo $row['Patient_Name'];?></td>
                <td> <?php echo $row['DOB'];?></td>
                <td> <?php echo $row['Gender'];?></td>
                <td> <?php echo $row['Age'];?></td>
                <td> <?php echo $row['Mo_no'];?></td>
                <td> <?php echo $row['Aadhar_No'];?></td>
                <td> <?php echo $row['Address'];?></td>
                <td> <?php  echo $row['Image'];?></td>
                <td> <a href='editdata.php?id=<?php echo $row['Id'];?>'>edit </a></td>
                <td> <a href='dataprintTable.php?id=<?php echo $row['Id'];?>' onclick='return checkdelete()'>delete </a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <script>
        function checkdelete(){
           return confirm('Are you sure you want to delete your data...??');
        }
    </script>
    <?php
       //delete data from database
       if(isset($_GET['id'])){
          $id = $_GET['id'];
          $changes="DELETE FROM card_table WHERE  Id='$id'";
          $delete=mysqli_query($con,$changes);
          if ($delete) {
              echo "<script>alert('Record deleted sucessfully')</script>";
              header('location:dataprintTable.php');
            }else{
              echo "<font color='red'>sorry delete process failed";
            }
        }
    ?>
</body>
</html>