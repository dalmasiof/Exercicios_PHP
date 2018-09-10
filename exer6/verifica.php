<?php 
    $numero = $_POST['num'];
    
    verifica($numero);

    function verifica($num){
        switch ($num){
            case 1:
            echo "Mês de Janeiro";
            break;

            case 2:
            echo "Mês de Fevereiro";
            break;

            case 3:
            echo "Mês de Março";
            break;

            case 4:
            echo "Mês de Abril";
            break;

            case 5:
            echo "Mês de Maio";
            break;

            case 6:
            echo "Mês de Junho";
            break;

            case 7:
            echo "Mês de Julho";
            break;

            case 8:
            echo "Mês de Agosto";
            break;

            case 9:
            echo "Mês de Setembro";
            break;

            case 10:
            echo "Mês de Outubro";
            break;

            case 11:
            echo "Mês de Novembro";
            break;

            case 12:
            echo "Mês de Dezembro";
            break;

             default:
            echo "$num não é um número de mês do calendário";
            break;

        }
    }
?>
