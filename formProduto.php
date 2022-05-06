<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <meta charset="utf-8">
    </head>
    <body>
        <center>
            <div class="conteudo">
                <div class="centro">
                    <h1>Cadastro de Produto</h1>
                    <div class="container">
                        <a href="formPessoa.php" class="bradius">Cad Pessoa</a><?php echo" | ";?>
                        <a href="listaPessoa.php" class="bradius">Lista Pessoa</a><?php echo" | ";?>
                        <a href="formProduto.php" class="bradius">Cad Produto</a><?php echo" | ";?>
                        <a href="listaProduto.php" class="bradius">Lista Produto</a>
                    </div>
                    <form method="post" action="recebeProduto.php">
                        <?php
                            if (isset($_GET['cd_produto'])) {
                                include "conexao.php";
                                $sql = "SELECT cd_produto, nm_produto, qt_estoque FROM produto WHERE cd_produto = $_GET[cd_produto]";
                                $pessoa = mysqli_fetch_array(mysqli_query($conexao, $sql));
                                echo "Código: <br>";
                                echo "<input type='text' name='cd_produto' value='$_GET[cd_produto]' readonly='readonly' class='txt bradius'><br><br>";
                            }
                        ?>
                        Nome:<br>
                        <input type="text" name="nm_produto" value="<?php if (isset($pessoa['nm_produto'])) { echo $pessoa['nm_produto']; } ?>" class="txt bradius" required><br><br>
                        Qtd: <br>
                        <input type="text" name="qt_estoque" value="<?php if (isset($pessoa['qt_estoque'])) { echo $pessoa['qt_estoque']; } ?>" class="txt bradius" required><br><br>
                        <input type="submit" value="Enviar" class="sb bradius">
                    </form>
                </div>
            </div>
        </center>
    </body>
</html>