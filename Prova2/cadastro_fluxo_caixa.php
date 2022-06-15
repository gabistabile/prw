<?php
include ('conexao.php');

$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

echo "<br>";
echo "DATA: " .$data ."<br>";
echo "TIPO: " .$tipo ."<br>";
echo "VALOR: " .$valor ."<br>";
echo "HISTORICO: " .$historico ."<br>";
echo "CHEQUE: " .$cheque ."<br>";


$sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
        values ('".$data. "', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "DADOS INSERIDOS COM SUCESSO";
            else
                echo "ERRO AO INSERIR DADOS: ".mysqli_error($con);

?>

<div>
    <a href="index.php">Inicio</a>
</div>