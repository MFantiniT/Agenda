<?php
include_once("edit.php");
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 id="title">Editar Contato</h1>

        <form action="edit.php?id=<?=$_GET['id']?>" method="post" id="edit-form">
            <label for="name">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?=$nome?>" required>

            <label for="phone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" value="<?=$telefone?>" required>

            <label for="notes">Anotações:</label>
            <textarea id="notes" name="anotacoes" ><?=$anotacoes?></textarea>

            <input type="submit" value="Salvar" class="add-button">
            <input type="submit" href="index.php" value="Voltar" class="add-button">
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#telefone').mask('(00) 00000-0000');
        });
    </script>

</body>
</html>
