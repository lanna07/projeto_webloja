<br>
<?php
require_once "modelo/categoriaModelo.php";

function adicionar() {
    if (ehPost()) {
        $categoria = $_POST["categoria"];
        $descricao = $_POST["descricao"];
        $subcategoria = $_POST["subcategoria"];

        $errors = array();


        if (strlen(trim($categoria)) == 0) {
            $errors[] = "Você deve inserir uma Categoria.";
        }

        if (strlen(trim($descricao)) == 0) {
            $errors[] = "Você deve inserir uma descrição.";
        }

        if (strlen(trim($subcategoria)) == 0) {
            $errors[] = "Você deve inserir uma Sub-Categoria.";
        }

        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("categoria/formulariocategoria", $dados);
        } else {
            $msg = adicionarcategoria($categoria, $descricao, $subcategoria);
            echo $msg;
            //redirecionar("categoria/listarcategorias");
        }
    } else {
        exibir("categoria/formulariocategoria");
    }
}

function listarcategorias() {
    $dados = array();
    $dados ["categoria"] = pegartodascategorias();
    exibir("categoria/listarcategorias", $dados);
}

function deletar($idcategoria) {
    $msg = deletarcategoria($idcategoria);
    redirecionar("categoria/listarcategorias");
}
