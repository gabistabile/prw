<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'DELETE FROM agenda WHERE id_agenda='.$id_agenda;
    echo "<h1> EXCLUSÃO DE AGENDA </h1>";
	$result = mysqli_query($con, $sql);

    
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir agenda: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a> 