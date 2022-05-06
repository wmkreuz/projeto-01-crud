<?php
    include 'conexao.php';
    $sql = "SELECT cd_produto, nm_produto, qt_estoque FROM produto";
    $resultado = mysqli_query($conexao, $sql);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <meta charset="utf-8">
    </head>
    <body>
        <center>
            <div class="conteudo">
                <div class="centro">
                    <h1>Lista de Produtos</h1>
                    <div class="container">
                    <a href="formPessoa.php" class="bradius">Cad Pessoa</a><?php echo" | ";?>
                    <a href="listaPessoa.php" class="bradius">Lista Pessoa</a><?php echo" | ";?>
                    <a href="formProduto.php" class="bradius">Cad Produto</a><?php echo" | ";?>
                    <a href="listaProduto.php" class="bradius">Lista Produto</a>
                    </div>
                    <br>
                    <table border="1" class="bradius">
                        <tr>
                            <td class="bradius">Código</td>
                            <td class="bradius">Nome</td>
                            <td class="bradius">Qtd</td>
                            <td class="bradius">Editar</td>
                            <td class="bradius">Excluir</td>
                        </tr>
                    <?php
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td class='bradius'>$linha[cd_produto]</td>";
                            echo "<td class='bradius'>$linha[nm_produto]</td>";
                            echo "<td class='bradius'>$linha[qt_estoque]</td>";
                            echo "<td class='bradius'><center><a href='formProduto.php?cd_produto=$linha[cd_produto]'><img src='editar_off.png' class='icone'></a><center></td>";
                            echo "<td class='bradius'><center><a href='excluirProduto.php?cd_produto=$linha[cd_produto]'><img src='excluir_vermelho.png' class='icone'></a><center></td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div>
            </div>
        </center>        
    </body>
</html>
