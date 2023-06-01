<?php
    include_once("conexaoDB.php");
    include_once("lib/functions.php");
    session_start();
    deleteContact($conexaoDB);
    $_SESSION['mensagem']= "Contato excluido com sucesso!";
    header("Location: index.php");
    exit();
    
?>