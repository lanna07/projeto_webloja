<?php

require_once "modelo/usuarioModelo.php";

function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome1"];
        $email = $_POST["email"];
        $senha = $_POST["senha1"];
        alert(adicionarUsuario($nome, $email, $senha));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
    
    if (strlen($_POST['email']) == 0) {
        $errors[] = "Você deve inserir um e-mail.";
    }elseif (strlen(trim($_POST['email'])) == 0) {
        $errors[] = "Você deve inserir um e-mail.";
    }
    
}

function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome1"];
        $email = $_POST["email"];
        $senha = $_POST["senha1"];
        alert(editarUsuario($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}


