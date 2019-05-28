<?php

function adicionarProduto($nomeproduto, $desc, $quant, $price){
    $sql = "INSERT INTO produto (nomeproduto, descricaoproduto, quantidade, preco) values ('$nomeproduto', '$desc', '$quant', '$price')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    
    if (!$resultado) {die ('Erro ao cadastrar produto'. mysqli_error($cnx)); }
        return 'Produto cadastrado com sucesso!';

    }
    
    
    function pegartodosprodutos(){
        
        $sql= "SELECT * FROM produto";
        $resultado = mysqli_query(conn(), $sql);
        $produto = array();
        
        while ($linha = mysqli_fetch_assoc($resultado)){
            $produto[] = $linha;
        }
        return $produto;
    }

