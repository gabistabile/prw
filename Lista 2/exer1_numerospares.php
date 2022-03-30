<?php
//Faça um script PHP para somar os números pares < 100

    $cont = 0;
    $soma = 0;

    for($cont = 0; $cont < 100; $cont = $cont+2){

        $soma = $soma + $cont;
    
    }

    echo 'O VALOR DA SOMA FINAL É: ' .$soma;

?>