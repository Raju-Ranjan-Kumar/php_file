<html>
    <body bgcolor="wheat">
<?php
    session_start();
    include('db_connection.php');
    $username=$_SESSION['UNAME'];

    if ($username==true) {
        
    }else{
        header('location:Login.php');
    }
    echo "<font color=green> Welcome ".$_SESSION['UNAME'];
?>
<br><br>
<p align="justify">
    <img src="Codeaegis.jpg" hight="250" width="200" align="left">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum optio sunt quas laudantium mollitia maxime non rerum, similique dolor. ipsum dolor sit, amet consectetur adipisicing elit. Molestias, odit eaque unde esse alias beatae temporibus nostrum veritatis sequi culpa ad provident facere! Labore sequi minima id blanditiis, nulla aliquid tempora accusamus incidunt laborum ab itaque vitae voluptatem quidem ex debitis consequatur voluptatibus dolor dolores. Repudiandae obcaecati molestiae voluptatem voluptate. ipsum dolor sit amet consectetur adipisicing elit. Rem est unde tempora? Magnam non cumque facere, possimus, dolores obcaecati ipsum dolore quod officiis dolor fuga dolorum exercitationem, beatae enim alias doloribus iste voluptatem eum hic veritatis nulla debitis impedit quo qui. Odio quod veniam porro temporibus tenetur nisi itaque ratione laboriosam sapiente, obcaecati dolorum quas et, placeat eligendi optio natus enim nesciunt voluptates! Voluptas optio ut ipsa adipisci magnam exercitationem, dolorum, tenetur aspernatur, suscipit quidem veritatis consequuntur! Voluptate perferendis dicta architecto enim asperiores eos corrupti qui. Omnis eaque, voluptates facilis, eos enim quia possimus, accusamus quaerat quo corporis aut repudiandae.
</p>
<button><a href="Logout.php">Logout</a></button>
</body>
</html>