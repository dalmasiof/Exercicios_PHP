<?php 
    
    calcula(0,1);




    function calcula($num1,$num2){
        $result = $num1 + $num2;
        
        
        if($result>20){
            echo $result + 8;
        }
        else{
            echo $result - 5;
        }
    }

?>