<?php

require_once "modelo/produtoModelo.php";

 function visualizar(){
     $dados = array();
     $dados['nomeproduto'] = "roupa1";
     $dados['desc'] = "roupa boa de la";
     $dados['price'] = "r$1000000";
     
    exibir ('produtos/visualizar' , $dados ) ;
 }
 
 
function listarprodutos(){
    $dados = array();
    $dados ["produto"] = pegartodosprodutos();
    exibir("produto/listar", $dados);
    
}
 
 function adicionar(){
     if (ehPost()){
            $nomeproduto = $_POST["nomeproduto"];
            $desc = $_POST["desc"];
            $quant = $_POST["quant"];
            $price = $_POST["price"];
            
            $msg = adicionarProduto($nomeproduto, $desc, $quant, $price);
            echo $msg;
         
     }else{
         exibir ("produtos/produto");
     }
         
         
     
 }