<?php
        include('conexao.php');
        $nome = $_GET['nome']; //NOME DO USUÁRIO
        $email = $_GET['email']; //EMAIL DO USUÁRIO
        $telefone = $_GET['telefone']; //TELEFONE DO USUÁRIO
        echo "<h1> CADASTRO DE USUÁRIOS";
        echo "NOME" .nome."<br>";
        echo "EMAIL".email."<br>";
        echo "TELEFONE".telefone. "<p>";

        $sql = "INSERT INTO usuario ('nome_usuario', 'email_usuario', 'telefone_usuario')
                VALUES ('".$nome."','".$email."','".$telefone."')";

        $result = mysqli_query($con, $sql);
        if($result)
        echo "DADOS INSERIDOS COM SUCESSO";

        else 
            echo "ERRO AO INSERIR NO BANCO DE DADOS: ".mysqli_error($con);
?>