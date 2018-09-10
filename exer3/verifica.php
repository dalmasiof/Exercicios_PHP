<?php 
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];

    verifica($nome,$sexo,$idade);

    function verifica($n,$s,$i){
        if($s == "feminino" && $i<25){
            echo "a liberação de $n esta aceita";
        }
        else{
            echo "a liberação de $n não esta aceita";
        }
    }

    
     
?>