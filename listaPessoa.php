<?php
    include 'conexao.php';
    $sql = "SELECT CD_PESSOA, NM_PESSOA, NR_CPF FROM PESSOA";
    $resultado = mysqli_query($conexao, $sql);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <meta charset ="utf-8">
    </head>
    <body>
        <?php
            echo"<center><div class='conteudo'>";
                echo"<div class='centro'>";
                    echo"<h1>Lista de Pessoas</h1>";
                    echo"<br><a href='formPessoa.php' class='bradius'>Novo Cadastro</a><br><br>";
                    echo"<table border='1'>";
                        echo"<tr>";
                            echo"<td>CÓDIGO</td>";
                            echo"<td>NOME</td>";
                            echo"<td>CPF</td>";
                            echo"<td>EXCLUIR</td>";
                            echo"<td>EDITAR</td>";
                        echo"</tr>";
                    while($linha = mysqli_fetch_array($resultado)){
                            echo"<tr>";
                                echo"<td>$linha[CD_PESSOA]</td>";
                                echo"<td>$linha[NM_PESSOA]</td>";
                                echo"<td>$linha[NR_CPF]</td>";
                                echo"<td><center><a href='excluirPessoa.php?CD_PESSOA=$linha[CD_PESSOA]'><img src='excluir_vermelho.png' class='icone'></a></center></td>";
                                echo"<td><center><a href='formPessoa.php?CD_PESSOA=$linha[CD_PESSOA]'><img src='editar_off.png' class='icone'></a></center></td>";
                            echo"</tr>";
                    }
                    echo"</table>";
                echo"</div>";
            echo"</div></center>";
        ?>
    </body>
</html>