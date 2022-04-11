<?php
include_once 'header.php';
?>

<div class="container">
    <div>
        <h1>Adicionar Novo Cliente</h1>
        <form action="sys/create.php" method="POST">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><br>
    
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome"><br>
    
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br>
    
            <label for="idade">Idade:</label>
            <input type="text" name="idade" id="idade"><br>
            <button type="submit" name="btn-cadastrar" id="btn-cadastrar" class="button-confirm">cadastrar</button>
            <a href="index.php" class="btn" style="background:#bbb; color:black;">Lista de Clientes</a>
           
        </form>
    </div>
</div>
<script src="./js/validarForm.js"></script>
<?php
include_once 'footer.php';