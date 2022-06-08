<?php
    include('conexao.php');

    $id_agenda = $_GET['id_fluxo_caixa'];
    $sql = 'DELETE FROM fluxo_caixa WHERE id_fluxo_caixa='.$id_fluxo_caixa;

    echo "<h1> EXCLUSÃO DA AGENDA </h1>";

	$result = mysqli_query($con, $sql);

	if($result)
		echo "REGISTRO EXCLUÍDO COM SUCESSO<br>";
	else
		echo "ERRO AO TENTAR EXCLUIR: ".mysqli_error($con)."<br>";
  
?>
<a href='listar_fluxo_caixa.php'> Voltar </a>