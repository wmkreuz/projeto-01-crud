<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <meta charset="utf8">
    </head>
    <body>
        <?php
            if(isset($_GET['CD_PESSOA'])){
                $cd_pessoa = $_GET['CD_PESSOA'];
                include 'conexao.php';
                $sql = "SELECT CD_PESSOA, NM_PESSOA, NR_CPF FROM PESSOA WHERE CD_PESSOA = $cd_pessoa";
                $resultado = mysqli_query($conexao, $sql);
                while($linha = mysqli_fetch_array($resultado)){
                    echo"<center><div class='conteudo'>";
                        echo"<div class='centro'>";
                            echo"<h1>Cadastro de Pessoa</h1>";
                            echo"<br><a href='listaPessoa.php' class='bradius'>Consultar lista de Pessoas</a><br><br>";
                            echo"<form method='post' action='recebe_Pessoa.php?cd_pessoa=$cd_pessoa'>";
                            echo"<label name='cd_pessoa' value='$cd_pessoa'><p class='formtext'>Cod: $cd_pessoa</p></label>";
                            echo"<p class='formtext'>Nome:</p><div class='texts'><input type='text' name='nm_pessoa' value='$linha[NM_PESSOA]' class='txt bradius' required></div><br><br>";
                            echo"<p class='formtext'>CPF:</p><div class='texts'><input type='text' name='nr_cpf' value='$linha[NR_CPF]' class='txt bradius' required></div><br><br>";
                            echo"<input type='submit' value='Gravar' class='sb bradius'>";
                            echo"</form>";
                            echo"</div>";
                    echo"</div></center>";
                }
            }else {
                echo"<center><div class='conteudo'>";
                        echo"<div class='centro'>";
                            echo"<h1>Cadastro de Pessoa</h1>";
                            echo"<br><a href='listaPessoa.php' class='bradius'>Consultar lista de Pessoas</a><br><br>";
                            echo"<form method='post' action='recebe_Pessoa.php'>";
                            echo"<p class='formtext'>Nome:</p><div class='texts'><input type='text' name='nm_pessoa' class='txt bradius' required></div><br><br>";
                            echo"<p class='formtext'>CPF:</p><div class='texts'><input type='text' name='nr_cpf' class='txt bradius' required><br></div><br>";
                            echo"<input type='submit' value='Gravar' class='sb bradius'>";
                            echo"</form>";
                            echo"</div>";
                    echo"</div></center>";
            }
        ?>
    </body>
</html>