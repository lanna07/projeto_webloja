<?php

require_once "modelo/produtoModelo.php";

function ver($id) {
    $dados["produto"] = pegartodosprodutos($id);
    exibir("produtos/visualizar", $dados);
}

function listarprodutos() {
    $dados = array();
    $dados ["produtos"] = pegartodosprodutos();
    exibir("produtos/listarprodutos", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];

        $errors = array();

        if (strlen(trim($nome)) == 0) {
            $errors[] = "Você deve inserir o nome do produto.";
        }

        if (strlen(trim($quantidade)) == 0) {
            $errors[] = "Você deve inserir a quantidade do produto.";
        }

        if (strlen(trim($preco)) == 0) {
            $errors[] = "Você deve inserir o preço do produto.";
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("produtos/formularioproduto", $dados);
        } else {
            $msg = adicionarProduto($nome, $descricao, $quantidade, $preco);
            redirecionar("produto/listarprodutos");
        }
    } else {
        exibir("produtos/formularioproduto");
    }
}

function deletar($idproduto) {
    $msg = deletarProduto($idproduto);
    redirecionar("produto/listarprodutos");
}

function editar($idproduto) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];
        
        editarproduto($idproduto, $nome, $descricao, $quantidade, $preco);
        redirecionar("produto/listarprodutos", $dados);
    }else{
        $dados["produto"] = pegartodosprodutos($idproduto);
        exibir("produtos/formularioproduto", $dados);
    }
    $msg = deletarProduto($idproduto);
    redirecionar("produto/listarprodutos");
}
