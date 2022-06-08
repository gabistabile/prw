<?php

    include('conexao.php');

    $sql = 'SELECT * FROM fluxo_caixa';

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LISTAGEM FLUXO CAIXA</title>
</head>
<body>
    <h1>LISTAGEM FLUXO DO CAIXA</h1>
        <table align="center" border = "1" width = 500>
            <tr>
                <th>CÓDIGO: </th>
                <th>DATA: </th>
                <th>TIPO: </th>
                <th>VALOR: </th>
                <th>HISTÓRICO: </th>
                <th>CHEQUE: </th>
                <th>EXCLUIR: </th>
            </tr>

        <?php
            while($row = mysqli_fetch_array($result))
            {
                

                echo "<tr>";
                echo "<td>" .$row['id_fluxo_caixa']. "</td>";
                echo "<td>" .$row['data']. "</td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                
                echo "<td>" .$row['historico']. "</td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id_agenda=".$row['id_fluxo_caixa']."'>Excluir</a></td>";                
                echo "</tr>";
            }
        ?>
            <div>
                <a href="index.php">Inicio</a>
            </div>
    </table>



</body>
</html>