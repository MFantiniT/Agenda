<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Contato</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 id="title">Adicionar Contato</h1>

        <form action="add.php" method="post" id="add-form">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" name="phone" required>

            <input type="submit" value="Adicionar" class="add-button">
        </form>
    </div>
</body>
</html>