<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    echo "<h1> ALTERAÇÃO DE DADOS </h1>";
    echo "<p> NOME USUÁRIO: ". $nome . "<p>";


    $sql = "UPDATE usuario SET
                nome_usuario = '".$nome."',
                email_usuario = '".$email."',
                telefone_usuario = '".$telefone."'
            WHERE id_usuario = ".$id_usuario;

    $result = mysqli_query($con, $sql);
    if($result)
        echo "DADOS ALTERADOS COM SUCESSO <br>";
    else
        echo "ERRO AO ALTERAR NO BANCO DE DADOS: ".mysqli_error($con)."<br>";
?>
<a href='index.php'> Voltar </a>