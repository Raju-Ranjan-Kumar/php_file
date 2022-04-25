<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            background-color:red;
            max-width:60%;
            margin:auto;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
       <h1>This is a heading</h1>
       <h3>Your marriage status is here: </h3>
        <?php
            $age=25;
            if($age>21){
                echo "You can do mmarriage ";
            }
            else if($age==25) {
                echo "You are 30 year old ";
            }
            else{
                echo "You can not do mmarriage ";
            }
        ?>
    </div>
</body>
</html>