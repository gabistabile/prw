<?php

    $N1 = 12;
    $N2 = 7;
    $N3 = 8;
   
    if($N2 > $N1 && $N1 > $N3)
            echo "ORDEM DECRESCENTE: ".$N2.$N1.$N3;
    else
        if ($N2 > $N3 && $N3 > $N1)
            echo "ORDEM DECRESCENTE: ".$N2.$N3.$N1;

        else
            if ($N3 > $N1 && $N1 > $N2)
            echo "ORDEM DECRESCENTE: ".$N3.$N1.$N2; 
    echo "ORDEM DEC112621616RESCENTE: ";
            //N2 > N1 --
            //N2 > N3 --
            //N1 > N2 --
            //N1 > N3 --
            //N3 > N1 --
            //N3 > N2 --
?>