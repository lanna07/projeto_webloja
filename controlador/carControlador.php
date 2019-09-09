<?php

require_once 'modelo/produtoModelo.php';

function adicionar($idproduto) {

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    } else {
        $produtos = array();
        redirecionar("car/listar");
    }

    $produtos[] = $idproduto;
    $_SESSION["carrinho"] = $produtos;
}

function listar() {

    if (isset($_SESSION["carrinho"])) {
        $todos = array();
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $todos[] = pegarprodutoPorId($produto);
        endforeach;
    } else {
        echo "Não existe sessao carrinho!";
        echo "Carrinho vazio!";
    }

    $dados = array();
    $dados["produtos"] = pegartodosprodutos();


    exibir('carrinho/listar', $dados);
}

function aha() {
    session_start();

    $nome = $_GET["nome"];

    if (isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"]; //peguei
    } else {
        $produtos = array();
    }

    $produtos[] = $nomeProduto;
    $_SESSION["carrinho"] = $produtos;
}

function deletar($idproduto) {        
    for ($i=0;$i<=count($_SESSION["carrinho"]);$i++){
        if ($_SESSION["carrinho"][$i]==$idproduto){
            $indice=$i;
        }
    }
    unset($_SESSION["carrinho"][$indice]);
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    
    redirecionar("car/listar");
}
?>

