<?php 
   $maior = str_replace(",",".",$_POST['maior']);
   $menor = str_replace(",",".",$_POST['menor']);

   $tempo = 0;

   while ($menor<=$maior){
       $menor = $menor+0.03;
       $maior = $maior+0.02;
        $tempo++;
   }

   echo "Demorou $tempo anos para o menor ser maior do que maior.";
   

   /*function myStrReplace($array) 
   {
    $chars = array('a','b','c'); //array com os elementos a serem substituidos
    $repls = array('d','e','f'); //array com os valores que vão substituir
    return str_replace($chars,$repls,$array); //percorre todos os elementos do array executando a função chamada
   }

$myPost = array_map('myStrReplace',$_POST);

print_r($myPost);*/
   
   
   

   

    
?>