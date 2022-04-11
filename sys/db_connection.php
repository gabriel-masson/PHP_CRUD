<?php
//conectar banco de dados
$servename = "localhost";
$username = "root";
$password = "1234";
$db_name = "crud";

$connect = mysqli_connect($servename,$username,$password,$db_name);
mysqli_set_charset($connect, "utf8"); // para evitar aqueles caracteres estranhos

if(mysqli_connect_error()){
    echo "erro de conexão".mysqli_connect_error();
}