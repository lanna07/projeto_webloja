<?php

function adicionarCliente($nome, $email, $senha, $tel, $cpf, $nasci, $endereco){
    $sql - "INSERT INTO cliente (nome, email, senha, tel, cpf, nasci, endereco) values ('$nome', '$email', '$senha')";
    $resultado = mysqli_query ($cnx - conn(), $sql);
    
    if (!$resultado) {die ('Erro ao cadastrar cliente'. mysqli_error($cnx)); }
        return 'Cliente cadastrado com sucesso!';
}
