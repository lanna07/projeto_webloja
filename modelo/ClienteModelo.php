<?php

function adicionarCliente($email, $senha1){
    $sql = "INSERT INTO cliente (email, senha) values ('$email', '$senha1')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    
    if (!$resultado) {die ('Erro ao cadastrar cliente'. mysqli_error($cnx)); }
        return 'Cliente cadastrado com sucesso!';

    }
    
    
    function pegartodosclientes(){
        
        $sql= "SELECT * FROM cliente";
        $resultado = mysqli_query(conn(), $sql);
        $clientes = array();
        
        while ($linha = mysqli_fetch_assoc($resultado)){
            $clientes[] = $linha;
        }
        return $clientes;
    }

