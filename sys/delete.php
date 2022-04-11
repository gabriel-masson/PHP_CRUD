<?php
//iniciar a conexão
include_once "db_connection.php";

//verificar se o botão foi clicado
if(isset($_POST["btn-remove"])){
   
    $id        = mysqli_escape_string($connect,$_POST["id"]);

    //inserir os dados no BD
    $sql = "DELETE FROM  cliente  WHERE id = '$id'";

    //verificar se de fato foi inserido
    if(mysqli_query($connect,$sql)){
        header("Location: ../index.php?Deletado sucesso");
    }else{
        header("Location: ../index.php?falha");
    }
}