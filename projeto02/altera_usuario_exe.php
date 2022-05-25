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

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];

    echo "<h1> ALTERAÇÃO DE DADOS </h1>";
    echo "<p> NOME USUÁRIO: ". $nome . "<p>";

    if(strlen($fotoNome) > 0)
    $sql = "UPDATE usuario SET
            nome_usuario='".$nome."',
            email_usuario='".$email."',
            telefone_usuario='".$telefone."',
            foto_blob='".$fotoBlob."',
            foto_nome='".$fotoNome."'
        WHERE id_usuario=".$id_usuario;

    else{
        $sql = "UPDATE usuario SET
        nome_usuario = '".$nome."',
        email_usuario = '".$email."',
        telefone_usuario = '".$telefone."'
        WHERE id_usuario = ".$id_usuario;     
    }

    $result = mysqli_query($con, $sql);
    if($result)
        echo "DADOS ALTERADOS COM SUCESSO <br>";
    else
        echo "ERRO AO ALTERAR NO BANCO DE DADOS: ".mysqli_error($con)."<br>";
?>
<a href='index.php'> Voltar </a>