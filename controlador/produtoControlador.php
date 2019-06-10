<?php

require_once "modelo/produtoModelo.php";

function visualizar() {
    $dados = array();
    $dados['nome'] = "roupa1";
    $dados['descricao'] = "roupa boa de la";
    $dados['preco'] = "r$1000000";

    exibir('produtos/visualizar', $dados);
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

    function deletar($idproduto){
        $msg = deletarProduto ($idproduto);
        redirecionar ("produto/listarprodutos");
    }

