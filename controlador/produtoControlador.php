<?php

 function visualizar(){
     $dados = array();
     $dados['nome'] = "roupa1";
     $dados['descricao'] = "roupa boa de la";
     $dados['preco'] = "r$1000000";
     
    exibir ('produtos/visualizar' , $dados ) ;
 }
 
 
 function adicionar(){
     if (ehPost()){
         $nome = $_POST["nome"];
         $email = $_POST["email"];
         $senha = $_POST["senha"];
         
         echo $nome . "<br>" . $email . "<br>" . $senha . "<br>"; 
     }else{
         exibir ("usuario/formulario");
     }
         
         
     
     
 }
