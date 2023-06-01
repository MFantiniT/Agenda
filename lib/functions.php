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

    function atualizaContato($conexaoDB, $nome, $telefone, $anotacoes, $id) {
        $sql = "UPDATE contatos SET nome = :nome, telefone = :telefone, anotacoes = :anotacoes WHERE id = :id";
        $stmt = $conexaoDB->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":anotacoes", $anotacoes);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    function deleteContact($conexaoDB){
        $id = $_GET['id'];
        $query = "DELETE FROM contatos WHERE id=:id";
        $stmt = $conexaoDB->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        
    }
?>
