<?php
include_once 'header.php';
include_once './sys/db_connection.php';
?>

<div class="container">
    <div>
        <h1>Clientes</h3>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM cliente";
                    $resultados = mysqli_query($connect,$sql);
                    while($dados = mysqli_fetch_array($resultados)):
                ?>
                <tr>
                    <td><?php echo $dados["nome"]?></td>
                    <td><?php echo $dados["sobrenome"]?></td>
                    <td><?php echo $dados["email"] ?></td>
                    <td><?php echo $dados["idade"]?></td>
            
                    <td><a href="editar.php?id=<?php echo $dados['id']?>">EDITAR</a></td>
                    <td><a href="remover.php?id=<?php echo $dados['id']?>">REMOVE</a></td>
                    
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <a href="adicionar.php" class="button-confirm">cadastrar</a>

    
</div>
<?php
include_once 'footer.php';