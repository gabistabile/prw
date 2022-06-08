<?php

    include('conexao.php');
    $id_agenda = $_GET['id_fluxo_caixa'];
    $sql = 'SELECT * FROM fluxo_caixa where id_fluxo_caixa = '.$id_fluxo_caixa;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>FLUXO CAIXA</title>
    </head>
    <body>
    <h1>ALTERA</h1>    
    <form method="post" action="altera_fluxo_caixa_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>FLUXO</legend>
               
                    <label for="data">DATA:</label>
                    <input type="text" id="data" name="data" value="<?php echo $row['data']?>" placeholder="DATA">
                </div>
                <div class="form-item">
                    <label for="tipo">TIPO:</label>
                    <input type="radio" id="tipo" name="tipo" value="<?php echo $row['tipo']?>" placeholder="TIPO">
                </div>
                <div class="form-item">
                    <label for="valor">VALOR:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor']?>" placeholder="VALOR">
                </div>
                <div class="form-item">
                    <label for="historico">HISTORICO:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="HISTORICO">
                </div>
                <div class="form-item">
                    <label for="cheque">CHEQUE:</label>
                    <input type="text" id="cheque" name="cheque" value="<?php echo $row['cheque']?>" placeholder="CHEQUE">
                </div>
                <input name="id_fluxo_caixa" type="hidden" value="<?php echo $row['id_fluxo_caixa']?>">
                

            </fieldset>
        </form>
    </body>
</html>