<?php

function adicionarProduto($nome, $descricao, $quantidade, $preco) {
    $sql = "INSERT INTO produto (nome, descricao, quantidade, preco) values ('$nome', '$descricao', '$quantidade', '$preco')";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao cadastrar produto' . mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
}
function pegarprodutoPorId($idproduto) {
    $sql = "select * from produto where idproduto = '$idproduto'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function pegartodosprodutos() {

    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function deletarProduto($idproduto) {
    $sql = "DELETE FROM produto where idproduto = $idproduto";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!resultado) {
        die('Erro ao deletar produto' . mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
}

function editarproduto($idproduto, $nome, $descricao, $quantidade, $preco) {
    $sql = "UPDATE produto SET nome = '$nome', descricao = '$descricao', quantidade = '$quantidade', preco= '$preco' where idproduto = '$idproduto'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    
    if (!$resultado) {die('Error ao alterar produto' . mysqli_error($cnx));}
    return 'Produto alterado com sucesso!';
}