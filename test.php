<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print a data on table using select query</title>
    <style>
        table,th,td{
            border:1px solid gray;
            text-align:center;
            font-size:15px;
            margin:auto;
        }
        #stud{
            font-weight: bold;
            font-size: 50px;
            text-decoration: underline;
            color: red;
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
           include('db_connaction.php');
           $query="select * from Card_Table";
           $result=mysqli_query($con,$query);
           while($row=mysqli_fetch_assoc($result)){
        echo"
        <tr>
            <td>" .$row['Patient_Id']."</td>
            <td>" .$row['Patient_Name']."</td>
            <td>" .$row['DOB']."</td>
            <td>" .$row['Gender']."</td>
            <td>" .$row['Age']."</td>
            <td>" .$row['Mo_no']."</td>
            <td>" .$row['Aadhar_no']."</td>
            <td>" .$row['Address']."</td>
            <td><a href='editdata.php?id= $row[Patient_Id]'>edit </a></td>
            <td><a href='delete.php?id= $row['Patient_Id']'>delete </a></td>
        </tr>";
        }
        ?>
    </table>
</body>
</html>