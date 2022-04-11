<?php
//iniciar a conexão
include_once "db_connection.php";


//verificar se o botão foi clicado
if(isset($_POST["btn-cadastrar"])){
    $nome      = mysqli_escape_string($connect,$_POST["nome"]);
    $sobrenome = mysqli_escape_string($connect,$_POST["sobrenome"]);
    $email     = mysqli_escape_string($connect,$_POST["email"]);
    $idade     = mysqli_escape_string($connect,$_POST["idade"]);

    //inserir os dados no BD
    $sql = "INSERT INTO cliente (nome,sobrenome,email,idade) VALUES ('$nome','$sobrenome','$email','$idade')";

    //verificar se de fato foi inserido
    if(mysqli_query($connect,$sql)){
        header("Location: ../index.php?sucesso");
    }else{
        header("Location: ../index.php?falha");
    }
}