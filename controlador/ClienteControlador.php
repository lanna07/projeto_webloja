<?php

require_once "modelo/ClienteModelo.php";

function adicionar(){
   
 if (ehPost()){   
    $email = $_POST["email"];
    $senha = $_POST["senha1"];
    
    $msg = adicionarCliente ($email, $senha);
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




          