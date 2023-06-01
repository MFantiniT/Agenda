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
            <input type="tel" id="telefone" name="telefone" required>

            <label for="anotacoes">Observações:</label>
            <input type="text" id="anotacoes" name="anotacoes" >

            <input type="submit" value="Adicionar" class="add-button">
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