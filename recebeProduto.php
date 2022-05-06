<?php
    include 'conexao.php';
    $nome = $_POST['nm_produto'];
    $qt = $_POST['qt_estoque'];
    if ($_POST['cd_produto']) {
        $sql = "UPDATE produto SET nm_produto='$nome', qt_estoque='$qt'
                WHERE cd_produto = $_POST[cd_produto] ";
    } else {
        $sql = "INSERT INTO produto (nm_produto, qt_estoque) VALUES ('$nome', '$qt')";
    }
    mysqli_query($conexao, $sql);
    header("location: listaProduto.php");
?>