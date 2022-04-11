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
        <h3>TEM CERTEZA QUE DESEJA DELETAR O CLIENTE</h3>
        <form action="sys/delete.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $dados["id"]?>">
            <button type="submit" name="btn-remove" id="btn-remove" class="btn confirm">SIM</button>
            <button type="submit" name="btn-remove" id="btn-remove" class="btn danger">NÃO</button>
     
        </form>
    </div>
</div>
<?php
include_once 'footer.php';