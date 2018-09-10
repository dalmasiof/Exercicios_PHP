<?php 
    $numero = array ($_POST['num10'],$_POST['num9'],$_POST['num8'],$_POST['num7'],$_POST['num6'],$_POST['num5'],$_POST['num4'],$_POST['num3'],$_POST['num2'],$_POST['num1']);
    
    if (in_array(0, $numero)) { 
        echo "Foi detectado o numero 0, a execução parou.";
        exit();
    }
     $contagem = 0;
   
   foreach($numero as $valor)
    {
       
        if($valor >100 && $valor<200){
        
            $contagem++;

        }
        else if($valor < 100){
            echo "$valor É menor que 100. ";
        }  

        else {
            echo "$valor É maior que 200. ";
        }
    }

    echo " .Foram digitados $contagem números entre 100 e 200.";
    
   

   

    
?>