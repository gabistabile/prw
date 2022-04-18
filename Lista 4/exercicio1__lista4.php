<?php

/*Criar um formulário que contenha os itens apresentados abaixo. Em seguida faça 
um script php que efetue os cálculos e apresente o resultado.*/

    $N1 = $_GET['N1'];
    $N2 = $_GET['N2'];
    $operacao = $_GET['operacao'];


    switch($operacao){

        //OPERAÇÃO COM SOMA
        case "SOMAR":
            echo $N1 + $N2;
            break;

            //OPERAÇÃO COM SUBTRAÇÃO
            case "SUBTRAIR":
                echo $N1 - $N2;
                break;

                //OPERAÇÃO COM MULTIPLICAÇÃO
                case "MULTIPLICAR":
                    echo $N1 * $N2;
                    break;

                    //OPERAÇÃO COM DIVISÃO
                    case "DIVIDIR":
                        echo $N1 / $N2;
                        break;

        default:
            echo "ERRO AO REALIZAR A OPERAÇÃO. VERIFIQUE NOVAMENTE";
    }
?>