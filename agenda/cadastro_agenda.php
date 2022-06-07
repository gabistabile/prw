<?php
include ('conexao.php');

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

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$celular =$_POST['celular'];
$email = $_POST['email'];
$dt_cadastro = date("Y-m-d");

echo "<br>";
echo "Nome do usuário: " .$nome ."<br>";
echo "O apelido do usuário: " .$apelido ."<br>";
echo "O endereco do usuário: " .$endereco ."<br>";
echo "O bairro do usuário: " .$bairro ."<br>";
echo "A cidade do usuário: " .$cidade ."<br>";
echo "O estado do usuário: " .$estado ."<br>";
echo "O telefone do usuário: " .$telefone ."<br>";
echo "O celular do usuário: " .$celular ."<br>";
echo "O email do usuário: " .$email ."<br>";
echo "A data do cadastro: " .$dt_cadastro ."<br>";

$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, 
cidade, estado, telefone, celular, email, dt_cadastro, foto_blob, foto_nome)
        values ('".$nome. "', '".$apelido."', '".$endereco."', '".$bairro."', '".$cidade."',
         '".$estado."', '".$telefone."', '".$celular."', '".$email."', '".$dt_cadastro."', '".$fotoBlob."', '".$fotoNome."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);

?>

<div>
    <a href="index.php">Inicio</a>
</div>