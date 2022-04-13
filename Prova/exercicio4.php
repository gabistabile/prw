<?php

$nome = $_GET["nome"]; //NOME DO CLIENTE
$estado = $_GET["estado"]; //ESTADO
$cpf = $_GET["cpf"];//CPF
$rg = $_GET["rg"];//RG
$sexo = $_GET["sexo"];//SEXO
$saldodocartao = $_GET["saldo do cartão"];//SALDO DO CARTÃO
$totaldacompra = $_GET["total da compra"];//TOTAL DA COMPRA

$erro = 0;
        if($nome && $cpf && $rg){
            echo "OS CAMPOS NOME, CPF E RG NÃO PODEM ESTAR EM BRANCO";
        }

$erro = 1;
        if($saldocliente < $totaldacompra){
            echo "<p style='color:red'>SALDO INSUFICIENTE PARA CONCLUIR A COMPRA</p>";
        }

$erro = 2;
        if($saldocliente > $totaldacompra){
            $total = $saldocliente - $totaldacompra;
            echo "TOTAL DA COMPRA: ".$total;
        }
?>