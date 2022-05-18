<?php
        include('conexao.php');
        $nome = $_POST['txtNome']; //NOME
        $apelido = $_POST['txtApelido']; //APELIDO
        $endereco = $_POST['txtEndereco']; //ENDEREÇO 
        $bairro = $_POST['txtBairro']; //BAIRRO
        $cidade = $_POST['txtCidade']; //CIDADE
        $estado = $_POST['txtEstado']; //ESTADO
        $telefone = $_POST['txtTelefone']; //TELEFONE
        $celular = $_POST['txtCelular']; //CELULAR
        $email = $_POST['txtEmail']; //EMAIL
        $dt_cadastro = date("Y-m-d");


        echo "<h1> CADASTRO DE AGENDAS";
        echo "NOME" .$nome."<br>";
        echo "APELIDO".$apelido."<br>";
        echo "ENDEREÇO".$endereco."<br>";
        echo "BAIRRO".$bairro."<br>";
        echo "CIDADE".$cidade."<br>";
        echo "ESTADO".$estado."<br>";
        echo "TELEFONE".$telefone."<br>";
        echo "CELULAR".$celular."<br>";
        echo "EMAIL".$email."<br>";

        $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
                VALUES ('".$nome."','".$apelido."','".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."',
                        '".$celular."', '".$email."', '".$dt_cadastro."')";

        $result = mysqli_query($con, $sql);
        if($result)
        echo "DADOS INSERIDOS COM SUCESSO";

        else 
            echo "ERRO AO INSERIR NO BANCO DE DADOS: ".mysqli_error($con);
?>