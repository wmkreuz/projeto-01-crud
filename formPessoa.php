<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <meta charset="utf-8">
    </head>
    <body>
        <center>
            <div class="conteudo">
                <div class="centro">
                    <h1>Cadastro de Pessoa</h1>
                    <div class="container">
                        <a href="formPessoa.php" class="bradius">Cad Pessoa</a><?php echo" | ";?>
                        <a href="listaPessoa.php" class="bradius">Lista Pessoa</a><?php echo" | ";?>
                        <a href="formProduto.php" class="bradius">Cad Produto</a><?php echo" | ";?>
                        <a href="listaProduto.php" class="bradius">Lista Produto</a>
                    </div>
                    <form method="post" action="recebePessoa.php">
                        <?php
                            if (isset($_GET['cd_pessoa'])) {
                                include "conexao.php";
                                $sql = "SELECT cd_pessoa, nm_pessoa, nr_cpf FROM pessoa WHERE cd_pessoa = $_GET[cd_pessoa]";
                                $pessoa = mysqli_fetch_array(mysqli_query($conexao, $sql));
                                echo "Código: <br>";
                                echo "<input type='text' name='cd_pessoa' value='$_GET[cd_pessoa]' readonly='readonly' class='txt bradius'><br><br>";
                            }
                        ?>
                        Nome:<br>
                        <input type="text" name="nm_pessoa" value="<?php if (isset($pessoa['nm_pessoa'])) { echo $pessoa['nm_pessoa']; } ?>" class="txt bradius" required><br><br>
                        CPF: <br>
                        <input type="text" name="nr_cpf" value="<?php if (isset($pessoa['nr_cpf'])) { echo $pessoa['nr_cpf']; } ?>" class="txt bradius" required><br><br>
                        <input type="submit" value="Enviar" class="sb bradius">
                    </form>
                </div>
            </div>
        </center>
    </body>
</html>