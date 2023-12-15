<?php


function insertTable(array $dados)
{
    $conexao = getConnection();
    try {
        $stmt = $conexao->prepare("INSERT INTO usuario (nome, cep, rua, numero, complemento, bairro, cidade, estado) VALUES (:nome,:cep, :rua,:numero,:complemento, :bairro,:cidade, :estado)");
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':cep', $dados['cep']);
        $stmt->bindValue(':rua', $dados['rua']);
        $stmt->bindValue(':numero', $dados['numero']);
        $stmt->bindValue(':complemento', $dados['complemento']);
        $stmt->bindValue(':bairro', $dados['bairro']);
        $stmt->bindValue(':cidade', $dados['cidade']);
        $stmt->bindValue(':estado', $dados['estado']);
        $status = $stmt->execute();

        return $status;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return true;
    } finally {
        $conexao = null;
    }
}