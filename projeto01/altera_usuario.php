<?php 
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario ='.$id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<html>
<body>


    <form method = "post" action = "cadastro_usuario.php">

        NOME: <input type ="text" id=nome name="txtNome" 
                value="<?php echo $row['nome_usuario']?>" placeholder = "DIGITE O NOME: ">
        <br><br>
        
        E-MAIL: <input type = "email" id=email name="txtEmail"
                value = "<?php echo $row['email_usuario']?>" placeholder = "DIGITE O EMAIL: ">

        TELEFONE: <input type = "text" id=telefone name="txtTelefone"
                value="<?php echo $row['telefone_usuario']?>" placeholder = "DIGITE O TELEFONE: ">

        <br><br>
        <input type = submit value = ENVIAR>
        
    </form>


</body>
</html> 