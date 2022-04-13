<?php

/*Efetue um script PHP que calcule e imprima o salário reajustado de um
funcionário de acordo com a seguinte regra:
    • Salários até 300, reajuste de 50%
    • Salários maiores que 300, reajuste de 30%*/

    $salario = 450;
    $reajuste1 = $salario + ($salario / 2); //REAJUSTE DE 50%
    $reajuste2 = $salario + (0.3 * $salario); //REAJUSTE DE 30%

    if($salario <= 300)

        echo "O VALOR DO REAJUSTE É: ".$reajuste1;

        else if($salario > 300)

            echo "O VALOR DO REAJUSTE É: ".$reajuste2;
?>

