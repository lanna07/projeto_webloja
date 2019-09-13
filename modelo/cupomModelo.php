<?php

function adicionarcupom($nomecupom, $desconto) {
    $sql = "INSERT INTO cupom (nomecupom, desconto) values ('$nomecupom', '$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao cadastrar cupom' . mysqli_error($cnx));
    }
    return 'Cupom cadastrado com sucesso!';
}

