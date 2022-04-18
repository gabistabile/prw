<?php

/*Escreva um programa em PHP para receber o nome de um estado do Brasil em 
um formulário e exibir sua capital.*/

    $estado = $_GET['ESTADO'];


    switch($estado){

        //CAPITAL DE SÃO PAULO
        case "SÃO PAULO":
            echo SÃO PAULO;
            break;

            //CAPITAL DO ESPÍRITO SANTO
            case "ESPÍRITO SANTO":
                echo VITÓRIA;
                break;

                //CAPITAL DE MINAS GERAIS
                case "MINAS GERAIS":
                    echo BELO HORIZONTE;
                    break;

    }
?>