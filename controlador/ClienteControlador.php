<?php

require_once "modelo/ClienteModelo.php";

function olhar() {
     if (ehPost()) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $errors = array();

        if (strlen(trim($email)) == 0) {
            $errors[] = "Você deve inserir um e-mail.";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = "Inserir um e-mail válido.";
            }
        }


        if (strlen(trim($senha)) == 0) {
            $errors[] = "Você deve inserir uma senha.";
        }

        if (strlen(trim($senha) < 8)) {
            $errors[] = "Senha muito fraca.";
        }

        if (strlen(trim($senha)) > 20) {
            $errors[] = "Senha muito grande.";
        }

        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/formulario", $dados);
        } else {
            $msg = adicionarCliente($email, $senha);
            redirecionar("cliente/listarClientes");
        }
    } else {
        exibir("cliente/formulariocadastroa");
    }
}

function ver($id) {
    $dados["cliente"] = pegarUsuarioPorId($id);
    exibir("cliente/visualizar", $dados);
}

function adicionar() {

    if (ehPost()) {
        $email = $_POST["email"];
        $senha = $_POST["senha1"];

        $errors = array();

        if (strlen(trim($email)) == 0) {
            $errors[] = "Você deve inserir um e-mail.";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = "Inserir um e-mail válido.";
            }
        }


        if (strlen(trim($senha)) == 0) {
            $errors[] = "Você deve inserir uma senha.";
        }

        if (strlen(trim($senha) < 8)) {
            $errors[] = "Senha muito fraca.";
        }

        if (strlen(trim($senha)) > 20) {
            $errors[] = "Senha muito grande.";
        }

        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/formulario", $dados);
        } else {
            $msg = adicionarCliente($email, $senha);
            redirecionar("cliente/listarClientes");
        }
    } else {
        exibir("cliente/formulario");
    }
}

function listarclientes() {
    $dados = array();
    $dados ["clientes"] = pegartodosclientes();
    exibir("cliente/listar", $dados);
}

function mostrar() {
    exibir("cliente/listar");
}
