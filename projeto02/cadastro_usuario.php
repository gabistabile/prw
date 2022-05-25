<?php
        include('conexao.php');

        //UPLOAD DE FOTO
        $fotoNome = $_FILES['foto']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){ 
                       
        // Upload file
                if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
        }
    }

        $nome = $_POST['txtNome']; //NOME DO USUÁRIO
        $email = $_POST['txtEmail']; //EMAIL DO USUÁRIO
        $telefone = $_POST['txtTelefone']; //TELEFONE DO USUÁRIO

        echo "<h1> CADASTRO DE USUÁRIOS";
        echo "NOME" .$nome."<br>";
        echo "EMAIL".$email."<br>";
        echo "TELEFONE".$telefone."<br>";

        $sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario, foto_blob, foto_nome)
                VALUES ('".$nome."','".$email."','".$telefone."', '".$fotoBlob."', '".$fotoNome."')";

        $result = mysqli_query($con, $sql);
        if($result)
        echo "DADOS INSERIDOS COM SUCESSO";

        else 
            echo "ERRO AO INSERIR NO BANCO DE DADOS: ".mysqli_error($con);
?>