<?php

require_once "modelo/cupomModelo.php";

function adicionar() {
    if (ehPost()) {
        $nomecupom = $_POST["cupom"];
        $desconto = $_POST["desconto"];
        adicionarcupom($nomecupom, $desconto);
        redirecionar("cupom/adicionar");
    } else {
        exibir("cupom/formularioCupom");
    }
}
