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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
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
        <?php
            session_start();
            if (isset($_SESSION['mensagem'])) {
                echo "<p style='text-align: center;'>" . $_SESSION['mensagem'] . "</p>";
                unset($_SESSION['mensagem']);
            }
        ?>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php while($resultado = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $resultado['nome'] ?></td>
                <td><?= $resultado['telefone'] ?></td>
                <td>
                <a href="editContato.php?id=<?php echo $resultado['id']."&nome=".$resultado['nome']."&telefone=".$resultado['telefone']."&anotacoes=".$resultado['anotacoes'] ; ?>">
                    <i class="fas fa-pencil-alt icon-edit"></i>
                </a>
                <a href="delete.php?id=<?php echo $resultado['id']; ?>">
                    <i class="fas fa-trash icon-delete"></i>
                </a>
                <a href="https://wa.me/<?=$resultado['telefone'] ?>">wpp</a>
                </td>
            </tr>
                <?php endwhile; ?>

        </table>

        <a href="adicionarContato.php" class="add-button">Adicionar Contato</a>
    </div>
</body>
</html>
