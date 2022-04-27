<?php
        include('conexao.php');
        $nome = $_POST['txtNome']; //NOME DO USUÁRIO
        $email = $_POST['txtEmail']; //EMAIL DO USUÁRIO
        $telefone = $_POST['txtTelefone']; //TELEFONE DO USUÁRIO

        echo "<h1> CADASTRO DE USUÁRIOS";
        echo "NOME" .$nome."<br>";
        echo "EMAIL".$email."<br>";
        echo "TELEFONE".$telefone."<br>";

        $sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
                VALUES ('".$nome."','".$email."','".$telefone."')";

        $result = mysqli_query($con, $sql);
        if($result)
        echo "DADOS INSERIDOS COM SUCESSO";

        else 
            echo "ERRO AO INSERIR NO BANCO DE DADOS: ".mysqli_error($con);
?>