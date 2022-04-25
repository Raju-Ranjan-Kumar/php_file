<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update and delete data</title>
    <style>
        table,th,td{
            border:1px solid gray;
            text-align:center;
            font-size:17px;
            margin:auto;
        }
        #stud{
            font-weight: bold;
            font-size: 50px;
            text-decoration: underline;
            color: red;
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
                <th>Patient_Id</th>
                <th>Patient_Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Mo_no</th>
                <th>Aadhar_no</th>
                <th>Address</th>
                <th colspan="2">Operation</th>
            </tr>
        </thead>
        <?php
           $servername="localhost";
           $username="root";
           $password="";
           $database="Hospital";
 
           $con=mysqli_connect($servername,$username,$password,$database);
 
           if($con){
              echo "Connection was successful <br>";
            }else{
               die("Sorry we faild to connect because:". mysqli_connect_error());
            }
            $query="select * from Card_Table ";
            $result=mysqli_query($con,$query);

            while($row=mysqli_fetch_assoc($result))
            {
        ?>
        <tr>
            <td> <?php echo $row['Patient_Id'];?> </td>
            <td> <?php echo $row['Patient_Name'];?> </td>
            <td> <?php echo $row['DOB'];?> </td>
            <td> <?php echo $row['Gender'];?> </td>
            <td> <?php echo $row['Age'];?> </td>
            <td> <?php echo $row['Mo_no'];?> </td>
            <td> <?php echo $row['Aadhar_no'];?> </td>
            <td> <?php echo $row['Address'];?> </td>
            <td> <a href='edit.php'<?php echo $row['Patient_Id'];?>>edit </a></td>
            <td> <a href='delete.php<?php echo $row['Id'];?>'>delete </a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>