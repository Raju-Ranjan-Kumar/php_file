<html>
    <body>
        <?php
            session_start();
            include('db_con.php');
            $useremail= $_SESSION['Email'];

            if ($useremail==true) {
                
            }else{
                header('location:Signin.php');
            }

            echo "<font color=blue> Welcome ".$_SESSION['Email'];
        ?>
        <br><br>
        <p align="justify">
        <img src="images/Codeaegis.jpg" hight="200" width="180" align="left">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio delectus et aliquid molestias autem, nobis ad excepturi ipsam. Voluptatum adipisci ex numquam magnam, reiciendis ipsam veritatis fugit. Nihil fuga, omnis doloribus minus rerum dicta laudantium ducimus maiores distinctio veniam labore illum natus saepe quis corporis quam cupiditate repellendus libero quasi eveniet sunt vero dolore commodi culpa. Facilis iusto quas assumenda ratione accusamus, quo tempora quis, harum impedit fugiat temporibus totam similique? Blanditiis nisi aliquid ducimus, qui eveniet tenetur inventore vel totam mollitia sapiente ex expedita eos esse repellendus ea suscipit perferendis ipsum natus, voluptate reiciendis similique fuga officiis quia! Nobis. ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum optio sunt quas laudantium mollitia maxime non rerum, similique dolor. ipsum dolor sit, amet consectetur adipisicing elit. Molestias, odit eaque unde esse alias beatae temporibus nostrum veritatis sequi culpa ad provident facere! Labore sequi minima id blanditiis, nulla aliquid tempora accusamus incidunt laborum ab itaque vitae voluptatem quidem ex debitis consequatur voluptatibus dolor dolores. Repudiandae obcaecati molestiae voluptatem voluptate. ipsum dolor sit amet consectetur adipisicing elit. Rem est unde tempora? Magnam non cumque facere, possimus, dolores obcaecati ipsum dolore quod officiis dolor fuga dolorum exercitationem, beatae enim alias doloribus iste voluptatem eum hic veritatis nulla debitis impedit quo qui. Odio quod veniam porro temporibus tenetur nisi itaque ratione laboriosam sapiente, obcaecati dolorum quas et, placeat eligendi optio natus enim nesciunt voluptates! Voluptas optio ut ipsa adipisci magnam exercitationem, dolorum, tenetur aspernatur, suscipit quidem veritatis consequuntur! Voluptate perferendis dicta architecto enim asperiores eos corrupti qui. Omnis eaque, voluptates facilis, eos enim quia possimus, accusamus quaerat quo corporis aut repudiandae.
    </p>
      <button><a href="Logout.php">Logout</a></button>
    </body>
</html>