<?php

require_once "modelo/ClienteModelo.php";

function olhar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = $_POST["tel"];
        $cpf = $_POST["cpf"];
        $datanasci = $_POST["nasci"];
        $endereco = $_POST["endereco"];

        $errors = array();

        if (strlen(trim($nome)) == 0) {
            $errors[] = "Você deve inserir um Nome.";
        }

        if (strlen(trim($email)) == 0) {
            $errors[] = "Você deve inserir um E-mail.";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = "Inserir um E-mail válido.";
            }
        }

        if (strlen(trim($senha)) == 0) {
            $errors[] = "Você deve inserir uma Senha.";
        } else {
            if (strlen(trim($senha) < 6)) {
                $errors[] = "Senha muito fraca.";
            } else {
                if (strlen(trim($senha)) > 20) {
                    $errors[] = "Senha muito grande.";
                }
            }
        }

        if (strlen(trim($telefone)) == 0) {
            $errors[] = "Você deve inserir um Telefone.";
        }

        if (strlen(trim($cpf)) == 0) {
            $errors[] = "Você deve inserir um CPF.";
        } else {
            if (strlen(trim($cpf)) < 11) {
                $errors[] = "CPF inválido.";
            }
        }

        if (strlen(trim($datanasci)) == 0) {
            $errors[] = "Você deve inserir uma Data de Nascimento.";
        }

        if (strlen(trim($endereco)) == 0) {
            $errors[] = "Você deve inserir um Endereço.";
        }

        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/formulariocadastroa", $dados);
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

function deletar($id){
    $msg = deletarCliente($id);
    redirecionar ("cliente/listarClientes");
}
