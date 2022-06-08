<?php
    include('conexao.php');

    $data = $_POST['tipo'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    
    echo "<h1> ALTERAÇÃO DE DADOS </h1>";
    echo "<p> DATA: " . $data . "<p>";
    echo "<p> TIPO: " . $tipo . "<p>";
    echo "<p> VALOR: " . $valor . "<p>";
    echo "<p> HISTORICO: " . $historico . "<p>";
    echo "<p> CHEQUE: " . $cheque . "<p>";
	
    $sql = "UPDATE fluxo_caixa SET
                data = '".$data."',
                tipo = '".$tipo."',
                valor = '".$valor."',
                historico = '".$historico."',
                cheque = '".$cheque."'
            WHERE id_fluxo_caixa = ".$id_fluxo_caixa;
 
	$result = mysqli_query($con, $sql);
	if($result)
		echo "DADOS ALTERADOS COM SUCESSO <br>";
	else
		echo "ERRO AO ALTERAR NO BANCO DE DADOS: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>