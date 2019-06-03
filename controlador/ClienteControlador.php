<?php

require_once "modelo/ClienteModelo.php";

function ver($id){
    $dados["cliente"] = pegarUsuarioPorId($id);
    exibir("cliente/visualizar", $dados);
}

function adicionar(){
   
 if (ehPost()){   
    $email = $_POST["email"];
    $senha = $_POST["senha1"];
    
    $msg = adicionarCliente ($email, $senha);
    echo $msg;
    
    
    $erro = array();
    
    if (strlen(trim($email)) ==0){
        $errors[] = "Você deve inserir um e-mail.";    
    }else{
         if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
             $errors[] = "Inserir um e-mail válido.";
         }
    } 
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




          