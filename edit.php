<?php
    include_once("conexaoDB.php");
    include_once("lib/functions.php");
    try {
        if(isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['anotacoes']) && isset($_GET['id'])){
            
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $anotacoes = $_POST['anotacoes'];
            $id = $_GET['id'];
            atualizaContato($conexaoDB, $nome, $telefone, $anotacoes, $id);
            header("Location: index.php");
            exit();

        } elseif (isset($_GET['nome'])) {
            
            $nome = $_GET['nome'];
            $telefone = $_GET['telefone'];
            $anotacoes = $_GET['anotacoes'];
            $id = $_GET['id'];
            
        } {

        }
    } catch (PDOException $e) {
        echo "error: ". $e->getMessage();
    }


?>