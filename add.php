<?php
    include_once("conexaoDB.php");
    if(isset($_POST["name"])){
        $nome = $_POST["name"];
        $telefone = $_POST["phone"];
    }
    $stmt = $conexaoDB ->prepare ("INSERT INTO contatos(nome, telefone) VALUES (:nome, :telefone)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->execute();
    $conexaoDB = null;
    header("Location: index.php");
    exit();
?>