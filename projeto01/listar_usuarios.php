<?php
    include('conexao.php');
    $sql = 'SELECT * FROM usuario';
    
    //RETORNA TODOS OS DADOS DA CONSULTA
    $result = mysqli_query($con, $sql);
    
    //RETORNA A PRIMEIRA LINHA
    //$row = mysqli_fetch_array($result);
    //print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LISTAGEM DE USUÁRIOS</title>
</head>
<body>
    <h1> LISTAGEM DE USUÁRIOS </h1>
    <table align="center" border="1" width = 500>
        <tr>
            <th>CÓDIGO</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" .$row['id_usuario']. "</td>";
                echo "<td>" .$row['nome_usuario']. "</td>";
                echo "<td>" .$row['email_usuario']. "</td>";
                echo "<td>" .$row['telefone_usuario']. "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>