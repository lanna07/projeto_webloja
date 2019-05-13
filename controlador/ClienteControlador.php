<?php
require_once "modelo/ClienteModelo.php";
function adicionar(){
   
 if (ehPost()){   
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $msg = adicionarCliente ($nome, $email, $senha);
    echo $msg;
    
 }else {}

exibir ("cliente/formulario"); 

}



          