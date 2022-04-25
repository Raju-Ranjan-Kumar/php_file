<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print a data on table </title>
    <style>
        table,th,td{
            border:1px solid gray;
            text-align:center;
            font-size:16px;
            margin:auto;
            border-radius:6px;
        }
        body{
            /* background-color:white; */
        }
        #stud{
            font-weight: bold;
            font-size: 40px;
            text-decoration: underline;
            color: black;
            text-align:center;
        }
        tr:hover{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <caption id="stud">Students Details</caption>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Mo_no</th>
                <th>Aadhar</th>
                <th>Address</th>
                <th colspan="2">Operation</th>
            </tr>
        </thead> 
        <?php
           include('db_con.php');
           $query="select * from student";
           
           $result=mysqli_query($con,$query);
           while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td> <?php echo $row['Id'];?></td>
            <td> <?php echo $row['Name'];?></td>
            <td> <?php echo $row['Email'];?></td>
            <td> <?php echo $row['DOB'];?></td>
            <td> <?php echo $row['Age'];?></td>
            <td> <?php echo $row['Course'];?></td>
            <td> <?php echo $row['Gender'];?></td>
            <td> <?php echo $row['Mo_no'];?></td>
            <td> <?php echo $row['Aadhar'];?></td>
            <td> <?php echo $row['Address'];?></td>
            <td> <a href='update.php?email=<?php echo $row['Email'];?>'>edit </a></td>
            <td> <a href='Print.php?email=<?php echo $row['Email'];?>' onclick='return checkdelete()'>delete </a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <script>
        function checkdelete(){
           return confirm('Are you sure you want to delete your data...??');
        }
    </script>
    <?php
       //delete data from database
        if(isset($_GET['email'])){
            $email = $_GET['email'];
            $changes="DELETE FROM student WHERE  Email='$email'";
            $delete=mysqli_query($con,$changes);
            if ($delete) {
                echo "<script> alert('Record deleted sucessfully')</script>";
                header('location:Print.php');
                }else{
                echo "<font color='red'>sorry delete process failed";
            }
        }
    ?>
</body>
</html>