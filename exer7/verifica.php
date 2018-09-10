<?php 
    $pessoa = $_POST['pessoa'];
    $livro = $_POST['nome'];
    $tipo = $_POST['tipo'];

    if($tipo == "professor"){
        echo "O livro $livro, foi alugado pelo $tipo $pessoa e terá que ser devolvido em 10 dias";
    }
    else{
        echo "O livro $livro, foi alugado pelo $tipo $pessoa e terá que ser devolvido em 3 dias";        
    }
?>