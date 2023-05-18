<?php
    include_once('lib/functions.php');
    if(isset($_POST['pesquisa'])){
        $result = pesquisaContato($conexaoDB, $_POST['pesquisa']);
    } else {
        $result = exibeContatos($conexaoDB);
    }   
?>



<!DOCTYPE html>
<html>
<head>
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 id="title">Agenda de Contatos</h1>

        <form action="index.php" method="post" class="search-form">
            <div class="input-group">
                <input type="text" name="pesquisa" id="pesquisa" class="input-field" value="">
                <input type="submit" value="Pesquisar" class="login-button">
            </div>
        </form>

        <table class="contacts-table">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php while($resultado = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $resultado['nome'] ?></td>
                <td><?= $resultado['telefone'] ?></td>

            </tr>
                <?php endwhile; ?>

        </table>

        <a href="adicionarContato.php" class="add-button">Adicionar Contato</a>
    </div>
</body>
</html>
