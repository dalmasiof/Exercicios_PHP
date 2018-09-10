<?php 
    $valores = array($_POST['num1'],$_POST['num2'],$_POST['num3']);
    

    verifica($valores);

    function verifica($val){
        sort ($val);

        var_dump ($val);
        

        
    }

    
     
?>