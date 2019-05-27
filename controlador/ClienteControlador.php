<?php

require_once "modelo/ClienteModelo.php";

function adicionar(){
   
 if (ehPost()){   
    $nome = $_POST["nome1"];
    $email = $_POST["email"];
    $senha = $_POST["senha1"];
    
    $msg = adicionarCliente ($nome, $email, $senha);
    echo $msg;
    
 }else {}

exibir ("usuario/formulario"); 

  
    }

function listarclientes(){
    $dados = array();
    $dados ["clientes"] = pegartodosclientes();
    exibir("cliente/listar", $dados);
    
}

function mostrar(){
    exibir("cliente/listar");
    
}




          