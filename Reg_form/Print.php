<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .alert-danger {
            color: white;
            background-color: blue;
            border-color: #f5c6cb;
        }
        @media(min-width:1200px){
            .container{max-width: 1295px;}
        }
    </style>
    <title>Print Data</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center;">Student's Details</h1><hr>
        <div class="my-3">
            <a class="btn btn-success" href="Stu_Details.php" role="button">Insert </a>
            <a class="btn btn-" href="Home.php" role="button" style="background-color:yellow; margin-left:41%;">Home</a>
            <a class="btn btn-danger" href="Logout.php" role="button" style="float:right;">Logout</a>
        </div>
        <div class="text-center">
            <div class="alert alert-danger" role="alert">
                <strong>Student Record</strong>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Mo_no</th>
                    <th>Aadhar</th>
                    <th>Pin</th>
                    <th>Address</th>
                    <th>Comment</th>
                    <th colspan="2">Operation</th>
                </tr>
            </thead>
            <?php
                session_start();
                include('db_con.php');
                $useremail= $_SESSION['Email'];
                if ($useremail==true) {
                    
                }else{
                   header('location:Signin.php');
                }
                
                $query="select * from student";
                
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <tbody>
                <tr>
                    <td> <?php echo $row['Id'];?></td>
                    <td> <?php echo $row['Name'];?></td>
                    <td> <?php echo $row['Email'];?></td>
                    <td> <?php echo $row['DOB'];?></td>
                    <td> <?php echo $row['Age'];?></td>
                    <td> <?php echo $row['Gender'];?></td>
                    <td> <?php echo $row['Course'];?></td>
                    <td> <?php echo $row['Mo_no'];?></td>
                    <td> <?php echo $row['Aadhar'];?></td>
                    <td> <?php echo $row['Pin'];?></td>
                    <td> <?php echo $row['Address'];?></td>
                    <td> <?php echo $row['Comment'];?></td>
                    <td> <a href='update.php?id=<?php echo $row['Id'];?>'>edit </a></td>
                    <td> <a href='Print.php?id=<?php echo $row['Id'];?>' onclick='return checkdelete()'>delete </a></td>
                </tr>
                <?php } ?>
                
            </tbody>
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
            $changes="DELETE FROM student WHERE  Id='$id'";
            $delete=mysqli_query($con,$changes);
            if ($delete) {
                // echo "<script> alert('Record deleted sucessfully')</script>";
                header('location:Print.php');
            }else{
                echo "<script> alert('Sorry delete process failed')</script>";
            }
        }
    ?>
</body>
</html>