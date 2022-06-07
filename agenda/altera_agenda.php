<?php

    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda = '.$id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> AGENDA</title>
    </head>
    <body>
    <h1>Altera Usuário</h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    
    <form method="post" action="altera_agenda_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
               
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>" placeholder="Digite o nome">
                </div>
                <div class="form-item">
                    <label for="apelido">Apelido:</label>
                    <input type="text" id="apelido" name="apelido" value="<?php echo $row['apelido']?>" placeholder="Digite o apelido">
                </div>
                <div class="form-item">
                    <label for="email">Endereco:</label>
                    <input type="text" id="endereco" name="endereco" value="<?php echo $row['endereco']?>" placeholder="Digite o endereco">
                </div>
                <div class="form-item">
                    <label for="apelido">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']?>" placeholder="Digite o bairro">
                </div>
                <div class="form-item">
                    <label for="email">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']?>" placeholder="Digite a cidade">
                </div>
                <div class="form-item">
                    <label for="email">Estado:</label>
                    <input type="estado" id="estado" name="estado" value="<?php echo $row['estado']?>" placeholder="Digite o estado">
                </div>
                <div class="form-item">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']?>" placeholder="Digite o Telefone">
                </div>
                <div class="form-item">
                    <label for="email">Celular:</label>
                    <input type="text" id="celular" name="celular" value="<?php echo $row['celular']?>" placeholder="Digite o celular">
                </div>
                <div class="form-item">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Digite o email">
                </div>
                <div class="form-item">
                    <input type="file" id="foto" name="foto" accept="image/*" />
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
                

            </fieldset>
        </form>
    </body>
</html>