<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern-RAJU*</title>
</head>
<body>
    <h1>* Pattern of RAJU in php</h1>
    <?php
        function R(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or ($i==0 and $j<7) or ($j==6 and $i<3) or ($i==3 and $j<7) or ($i==4 and $j==2) or ($i==5 and $j==3) or ($i==6 and $j==4)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        R();
    ?><br><br>
    <?php
        function A(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($i<7 and $j==0) or ($i==0 and $j<7) or ($j==7 and $i<7) or ($i==3 and $j<7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        A();
    ?><br><br>
    <?php
        function J(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==7 and $i<7) or ($i==6 and $j<7) or ($j==0 and $i>3)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        J();
    ?><br><br>
    <?php
        function U(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or ($i==6 and $j<7) or ($j==7 and $i<7)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        U();
    ?><br><br>


<form action="" method=""POST>
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>

    <?php
        // if(isset($_POST['submit'])){
        //     $name=$_POST['name'];
        //     echo ($name);
        // }
        $name="Raju";
        echo $name;
    ?><br><br> 
</body>
</html>