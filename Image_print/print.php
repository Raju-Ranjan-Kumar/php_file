<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print image</title>
    <style>
        *{padding:0; margin:0;}
        body{background-color:white;}
        h1{text-align:center; }
        .container{background-color:aliceblue;}
        table,th,td{border:1px solid black; text-align:center; font-size:16px; margin:auto; line-height:30px;}
        #stud{font-weight:bold; font-size:45px; text-decoration:underline; color:blue; text-align:center; padding:25px 0px;}
        tr:hover{background-color:black; color:white;}
    </style>
</head>
<body>
    <div class="container">
        <table>
        <caption id="stud">Student Details</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Image</th>
                </tr>
            </thead>

            <?php
               include('db_con.php');
                $query="select * from show_img";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result)){
            ?>

            <tbody>
                <tr>
                    <td><?php echo $row['Id'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Phone'];?></td>
                    <td><?php echo "<img height=80px; weidth=90px; src='".$row['Image']."'>"?></td>
                </tr>
            </tbody>
            <?php
                } 
            ?>
        </table>
    </div>
</body>
</html>