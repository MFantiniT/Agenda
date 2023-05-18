<?php
include_once('.\conexaoDB.php');
    function exibeContatos($conexaoDB){
        try {
            $sql = "SELECT * FROM contatos";
            $stmt = $conexaoDB -> prepare($sql);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    function pesquisaContato($conexaoDB, $pesquisa){
        try {
            $sql = "SELECT * FROM contatos WHERE nome LIKE :pesquisa OR telefone LIKE :pesquisa";
            $pesquisa = '%' . $pesquisa . '%';
            $stmt = $conexaoDB->prepare($sql);
            $stmt->bindParam(":pesquisa", $pesquisa);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
?>
