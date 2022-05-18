<?php
    include('conexao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['txtNome']; //NOME
    $apelido = $_POST['txtApelido']; //APELIDO 
    $endereco = $_POST['txtEndereco']; //ENDEREÇO 
    $bairro = $_POST['txtBairro']; //BAIRRO
    $cidade = $_POST['txtCidade']; //CIDADE
    $estado = $_POST['txtEstado']; //ESTADO
    $telefone = $_POST['txtTelefone']; //TELEFONE
    $celular = $_POST['txtCelular']; //CELULAR
    $email = $_POST['txtEmail']; //EMAIL

    echo "<h1> ALTERAÇÃO DE DADOS </h1>";
    echo "<p> NOME USUÁRIO: ". $nome . "<p>";


    $sql = "UPDATE agenda SET
                nome = '".$nome."',
                apelido = '".$apelido."',
                endereco= '".$endereco."',
                bairro = '".$bairro."',
                cidade = '".$cidade."',
                estado = '".$estado."',
                telefone= '".$telefone."',
                celular = '".$celular."',
                email = '".$email."'

            WHERE id_agenda = ".$id_agenda;

    $result = mysqli_query($con, $sql);
    if($result)
        echo "DADOS ALTERADOS COM SUCESSO <br>";
    else
        echo "ERRO AO ALTERAR NO BANCO DE DADOS: ".mysqli_error($con)."<br>";
?>
<a href='index.php'> Voltar </a>