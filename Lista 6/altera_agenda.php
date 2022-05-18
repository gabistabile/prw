<?php 
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda ='.$id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<html>
<body>
 

    <form method = "post" action = "altera_agenda_exe.php">

        NOME: <input type ="text" id=nome name="txtNome" 
                value="<?php echo $row['nome']?>" placeholder = "DIGITE O NOME: ">
        <br><br>
        
        APELIDO: <input type = "text" id=apelido name="txtApelido"
                value = "<?php echo $row['apelido']?>" placeholder = "DIGITE O APELIDO: ">

        ENDEREÇO: <input type = "text" id=endereco name="txtEndereco"
                value="<?php echo $row['endereco']?>" placeholder = "DIGITE O ENDEREÇO: ">

        BAIRRO: <input type = "text" id=bairro name="txtBairro"
        value="<?php echo $row['bairro']?>" placeholder = "DIGITE O BAIRRO: ">

        CIDADE: <input type = "text" id=cidade name="txtCidade"
                value="<?php echo $row['cidade']?>" placeholder = "DIGITE A CIDADE: ">

        ESTADO: <input type = "text" id=estado name="txtEstado"
        value="<?php echo $row['estado']?>" placeholder = "DIGITE O ESTADO: ">

        TELEFONE: <input type = "text" id=telefone name="txtTelefone"
        value="<?php echo $row['telefone']?>" placeholder = "DIGITE O TELEFONE: ">

        CELULAR: <input type = "text" id=celular name="txtCelular"
        value="<?php echo $row['celular']?>" placeholder = "DIGITE O CELULAR: ">       
        
        E-MAIL: <input type = "email" id=email name="txtEmail"
        value = "<?php echo $row['email']?>" placeholder = "DIGITE O EMAIL: ">

        <br><br>
        <input type = submit value = ENVIAR>
        <a href = 'index.php'> Voltar </a>

        <input name = "id_agenda" type = "hidden" value = "<?php echo $row['id_agenda']?>">
        
    </form>


</body>
</html> 