<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "web_loja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}