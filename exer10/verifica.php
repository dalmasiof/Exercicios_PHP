<?php 
    $numero = array ($_POST['num10'],$_POST['num9'],$_POST['num8'],$_POST['num7'],$_POST['num6'],$_POST['num5'],$_POST['num4'],$_POST['num3'],$_POST['num2'],$_POST['num1']);
    
    $soma = 0;
    $negativo = 0;
foreach($numero as $valor)
    {
    if($valor == "")
        {   
        $valor = 0;
        }

    else{
        if($valor >=0)
        {
            $soma = $soma+$valor;
        }
        else{
            
            $negativo++;
            
            }
        }   
    }
echo "Total da soma de números positivos: $soma<br>";
echo "Total de números negativos: $negativo";
   

    
?>