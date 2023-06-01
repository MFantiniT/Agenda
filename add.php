<?php
    include_once("conexaoDB.php");
    $anotacoes = "";
    if(isset($_POST["name"])){
        $nome = $_POST["name"];
        $telefone = $_POST["telefone"];
        $anotacoes = $_POST["anotacoes"];
    }
    $anotacoes = "";
    $stmt = $conexaoDB ->prepare ("INSERT INTO contatos(nome, telefone, anotacoes) VALUES (:nome, :telefone, :anotacoes)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":anotacoes", $anotacoes);
    $stmt->execute();
    header("Location: index.php");
    exit();
?>