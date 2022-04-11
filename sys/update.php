<?php
//iniciar a conexão
include_once "db_connection.php";

//verificar se o botão foi clicado
if(isset($_POST["btn-editar"])){
    $nome      = mysqli_escape_string($connect,$_POST["nome"]);
    $sobrenome = mysqli_escape_string($connect,$_POST["sobrenome"]);
    $email     = mysqli_escape_string($connect,$_POST["email"]);
    $idade     = mysqli_escape_string($connect,$_POST["idade"]);
    $id        = mysqli_escape_string($connect,$_POST["id"]);

    //inserir os dados no BD
    $sql = "UPDATE  cliente 
            SET     
                nome ='$nome',
                sobrenome = '$sobrenome',
                email ='$email',
                idade='$idade'
            WHERE id = '$id'";

    //verificar se de fato foi inserido
    if(mysqli_query($connect,$sql)){
        header("Location: ../index.php?atualizadoCOMsucesso");
    }else{
        header("Location: ../index.php?falha");
    }
}