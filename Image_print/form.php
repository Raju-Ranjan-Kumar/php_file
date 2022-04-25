<?php
    include('db_con.php');
    error_reporting(0);
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $phone=$_POST['mono'];
        $img=$_FILES['image'];

        $target_dir = "upload_image/";
        $target_file = $target_dir . basename($img["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($img["tmp_name"]);
        if($check !== false) {
            if (move_uploaded_file($img["tmp_name"], $target_file)) {
                
                $sql="insert into show_img(Name,Phone,Image)  values ('$name','$phone','$target_file')";
                $query=mysqli_query($con,$sql);

                if($query){
                    echo "<script> alert('data inserted successfully') </script>";
                }
            } else {
                die("something went wrong!");
            }
        }else{
            die("This is not an image");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image </title>
    <style>
         *{margin:0; padding:0;}
        h1{text-align:center; font-weight:bold; text-decoration:underline; color:green; font-size:40px;}
        div{ margin:auto;}
        #container{border:4px solid blue; width:26%; padding:25px; margin-top:20px; background-color:aliceblue; border-radius:12px; text-align:center;}
        input{height: 26px; border-radius: 8px;}
        #submit{width:75px; height:32px; background-color:green; color:white; font-weight:bold;}
        #image{width:190px; height:26px; border-radius:8px; text-align:center; border:2px solid black;}
    </style>
</head>
<body>
    <h1>Enter your details here</h1> 
    <div id="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            Name: <input type="text" name="name" id="name"><br><br>
            Phone:&nbsp; <input type="number" name="mono" id="mo"> <br><br>
            Image:&nbsp;&nbsp; <input type="file" name="image" id="image"> <br><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>