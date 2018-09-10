<?php 
    $numero = $_POST['numero'];
    $vezes = $_POST['vezes'];
    
    $operacao = 0;

   for($i=0;$i<=$vezes;$i++)
   {
      $resultado = $numero * $operacao;
       echo "$numero * $operacao = ".$resultado."<BR>";
       $operacao++;
   }

   

    
?>