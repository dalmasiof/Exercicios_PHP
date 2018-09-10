<?php 
    calcula(10);
    
    function calcula($num1){
        if($num1%2 != 0 || $num1%5 != 0 || $num1%10 != 0  ){
            echo "$num1 não é divisivel";
        }
        else{
            echo "$num1 é divisivel";
        }
    }
?>