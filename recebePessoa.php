<?php
    include 'conexao.php';
    $nome = $_POST['nm_pessoa'];
    $cpf = $_POST['nr_cpf'];
    if ($_POST['cd_pessoa']) {
        $sql = "UPDATE pessoa SET nm_pessoa='$nome', nr_cpf='$cpf'
                WHERE cd_pessoa = $_POST[cd_pessoa] ";
    } else {
        $sql = "INSERT INTO pessoa (nm_pessoa, nr_cpf) VALUES ('$nome', '$cpf')";
    }
    mysqli_query($conexao, $sql);
    header("location: listaPessoa.php");
?>