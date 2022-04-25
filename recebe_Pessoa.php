<?php
    include 'conexao.php';
    $cd_pessoa = $_GET['cd_pessoa'];
    $nm_pessoa = $_POST['nm_pessoa'];
    $nr_cpf = $_POST['nr_cpf'];
    if($cd_pessoa){
        $sql = "UPDATE pessoa SET NM_PESSOA = '$nm_pessoa', NR_CPF = '$nr_cpf' WHERE pessoa.CD_PESSOA = $cd_pessoa";
        mysqli_query($conexao, $sql);
    } else {
        $sql = "INSERT INTO PESSOA (NM_PESSOA, NR_CPF) VALUES ('$nm_pessoa','$nr_cpf')";
        mysqli_query($conexao, $sql);
    }
    echo"$cd_pessoa";
    echo"$nm_pessoa";
    echo"$nr_cpf";
    header('location: listaPessoa.php')
?>