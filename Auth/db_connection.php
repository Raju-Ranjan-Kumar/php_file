<?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="Hos_mang";
  $con=mysqli_connect($servername,$username,$password,$database);

  if($con){
    echo "<font color='white'>Connection was successful <br>";
  }else{
    die("Sorry we faild to connect because:". mysqli_connect_error());
  }
?>