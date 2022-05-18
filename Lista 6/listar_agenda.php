<?php
    include('conexao.php');
    $sql = 'SELECT * FROM agenda';
    
    //RETORNA TODOS OS DADOS DA CONSULTA
    $result = mysqli_query($con, $sql);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LISTAGEM DE AGENDAS</title>
</head>
<body>
    <center>
    <h1> LISTAGEM DE AGENDAS </h1>
    </center>
    <table align="center" border> 
        <tr>
            <th>CÓDIGO</th>
            <th>NOME</th>
            <th>APELIDO</th>
            <th>ENDEREÇO</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>TELEFONE</th>
            <th>CELULAR</th>
            <th>EMAIL</th>
            <th>DATA DO CADASTRO</th>
            <th>EXCLUIR</th>
        </tr>
        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_agenda']. "</td>";
                echo "<td>"."<a href='altera_agenda.php?id_agenda=".$row['id_agenda']."'>" .$row['nome']. "</a></td>";
                echo "<td>" .$row['apelido']. "</td>";
                echo "<td>" .$row['endereco']. "</td>";
                echo "<td>" .$row['bairro']. "</td>";
                echo "<td>" .$row['cidade']. "</td>";
                echo "<td>" .$row['estado']. "</td>";
                echo "<td>" .$row['telefone']. "</td>";
                echo "<td>" .$row['celular']. "</td>";
                echo "<td>" .$row['email']. "</td>";
                echo "<td>" .$row['dt_cadastro']. "</td>";
                echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";          
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>