<?php
include_once 'header.php';
include_once "./sys/db_connection.php";

if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect,$_GET["id"]);
    $sql = "SELECT * FROM cliente WHERE id = '$id' ";

    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<div class="container">
    <div>
        <h1>Atualizar Cliente</h1>
        <form action="sys/update.php" method="POST">
            <!--input escondido para pegar o id para alterar-->
            <input type="hidden" name="id" value="<?php echo $dados["id"]?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $dados["nome"]?>"><br>
    
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados["sobrenome"]?>"><br>
    
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $dados["email"]?>"><br>
    
            <label for="idade">Idade:</label>
            <input type="text" name="idade" id="idade" value="<?php echo $dados["idade"]?>"><br>
            <button type="submit" name="btn-editar" id="btn-editar" class="button-confirm">Editar</button>
            <a href="index.php">Lista de Clientes</a>
           
        </form>
    </div>
</div>
<?php
include_once 'footer.php';