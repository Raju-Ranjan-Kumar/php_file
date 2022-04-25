<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alphabet pattern</title>
</head>
<body>
    <h1>Alphabet pattern in php</h1>
    <?php 
        function A(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if((($j==0 or $j==7) and $i<7) or (($i==0 or $i==3) and $j<7)){
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
        function B(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if((($j==0 or $j==7) and $i<7) or (($i==0 or $i==3 or $i==6) and $j<7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>"; 
            }
        }
        B();
    ?><br><br>
    <?php
        function C(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or (($i==0 or $i==6) and $j<7)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        C();
    ?><br><br>
    <?php
        function D(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if((($i==0 or $i==6) and $j<7) or (($j==3 or $j==7) and $i<7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        D();
    ?><br><br>
    <?php
        function E(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or (($i==0 or $i==3 or $i==6) and $j<7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        E();
    ?><br><br>
    <?php
        function F(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or (($i==0 or $i==3) and $j<7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        F();
    ?><br><br>
    <?php
        function G(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or ($i==6 and $j<5) or (($j==4 or $j==7) and $i>2) or ($i==3 and $j>3)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        G();
    ?><br><br>
    <?php
        function H(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if((($j==0 or $j==7) and $i<7) or ($i==3 and $j<7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        H();
    ?><br><br>
    <?php
        function I(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==3 and $i<7) or (($i==0 or $i==6) and $j<7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        I();
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
        function K(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or ($i==0 and $j==5) or ($i==1 and $j==4) or ($i==2 and $j==3) or($j==$i-1 and $i>2)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        K();
    ?><br><br>
    <?php
        function L(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or ($i==6 and $j<7)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        L();
    ?><br><br>
    <?php
        function M(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if((($j==0 or $j==7) and $i<7) or ($i==1 and $j==1) or ($i==2 and $j==2) or ($i==3 and $j==3) or ($i==2 and $j==4) or ($i==1 and $j==5)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        M();
    ?><br><br>
    <?php
        function N(){
            for ($i=0; $i<6; $i++){
                for ($j=0; $j<=6; $j++){
                    if((($j==0 or $j==6) and $i<6) or ($i==1 and $j==1) or ($i==2 and $j==2) or ($i==3 and $j==3) or ($i==4 and $j==4)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        N();
    ?><br><br>
    <?php
        function O(){
            for ($i=0; $i<6; $i++){
                for ($j=0; $j<=6; $j++){
                    if((($j==0 or $j==6) and $i<6) or (($i==0 or $i==5) and $j<6)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        O();
    ?><br><br>
    <?php
        function P(){
            for ($i=0; $i<6; $i++){
                for ($j=0; $j<=6; $j++){
                    if(($j==0 and $i<6) or (($i==0 or $i==2) and $j<6) or ($j==6 and $i<3)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        P();
    ?><br><br>
    <?php
        function Q(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if((($j==0 or $j==6) and $i<6) or (($i==0 or $i==5) and $j<6) or ($i==4 and $j==5) or ($i==6 and $j==7)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        Q();
    ?><br><br>
    <?php
        function R(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<7) or (($i==0 or $i==3) and $j<7) or ($j==6 and $i<3) or ($i==4 and $j==2) or ($i==5 and $j==3) or ($i==6 and $j==4)){
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
        function S(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($j==0 and $i<3) or (($i==0 or $i==3 or $i==6) and $j<6) or ($j==6 and $i>3)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        S();
    ?><br><br>
    <?php
        function T(){
            for ($i=0; $i<6; $i++){
                for ($j=0; $j<=8; $j++){
                    if(($j==4 and $i<6) or ($i==0 and $j<8)){
                        echo "*";    
                    }else{  
                        echo " &nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        T();
    ?><br><br>
    <?php
        function U(){
            for ($i=0; $i<6; $i++){
                for ($j=0; $j<=6; $j++){
                    if((($j==0 or $j==6) and $i<6) or ($i==5 and $j<6)){
                        echo "*";    
                    }else{  
                        echo "&nbsp; "; 
                    }    
                }        
                echo "<br>";
            }
        }
        U();
    ?><br><br>
    <?php
        function V(){
            for ($i=0; $i<5; $i++){
                for ($j=0; $j<=8; $j++){
                    if(($i==0 and $j==0) or ($i==1 and $j==1) or ($i==2 and $j==2) or ($i==3 and $j==3) or ($i==4 and $j==4) or ($i==3 and $j==5) or ($i==2 and $j==6) or ($i==1 and $j==7) or ($i==0 and $j==8)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        V();
    ?><br><br>
    <?php
        function W(){
            for ($i=0; $i<5; $i++){
                for ($j=0; $j<=12; $j++){
                    if(($i==0 and $j==0) or ($i==1 and $j==1) or ($i==2 and $j==2) or ($i==3 and $j==3) or ($i==4 and $j==4) or ($i==3 and $j==5) or ($i==2 and $j==6) or ($i==3 and $j==7) or ($i==4 and $j==8) or ($i==3 and $j==9) or ($i==2 and $j==10) or ($i==1 and $j==11) or ($i==0 and $j==12)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        W();
    ?><br><br>
    <?php
        function X(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=7; $j++){
                    if(($i==0 and $j==0) or ($i==1 and $j==1) or ($i==2 and $j==2) or ($i==3 and $j==3) or ($i==4 and $j==4) or ($i==5 and $j==5) or ($i==6 and $j==6) or ($i==0 and $j==6) or ($i==1 and $j==5) or ($i==2 and $j==4) or ($i==4 and $j==2) or ($i==5 and $j==1) or ($i==6 and $j==0)){
                            echo "*";    
                    }else{ 
                        echo " &nbsp; "; 
                    }     
                }        
                echo "<br>";
            }
        }
        X();
    ?><br><br>
    <?php
        function Y(){
            for ($i=0; $i<5; $i++){
                for ($j=0; $j<=8; $j++){
                    if(($i==0 and $j==0) or ($i==1 and $j==1) or ($i==2 and $j==2) or ($i==1 and $j==4) or ($i==0 and $j==5) or ($i==3 and $j==2) or ($i==4 and $j==1) or ($i==5 and $j==0)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        Y();
    ?><br><br>
    <?php
        function Z(){
            for ($i=0; $i<7; $i++){
                for ($j=0; $j<=8; $j++){
                    if((($i==0 or $i==6) and $j<7) or ($i==1 and $j==5) or ($i==2 and $j==4) or ($i==3 and $j==3) or ($i==4 and $j==2) or ($i==5 and $j==1)){
                        echo "*";    
                    }else{  
                        echo "&nbsp;&nbsp;"; 
                    }    
                }        
                echo "<br>";
            }
        }
        Z();
    ?><br><br>
</body>
</html>