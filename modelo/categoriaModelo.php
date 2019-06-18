<?php

function adicionarcategoria($categoria, $descricao, $subcategoria){
    $sql = "INSERT INTO categoria (categoria, descricao, subcategoria) values ('$categoria', '$descricao', '$subcategoria')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    
    if (!$resultado) {die ('Erro ao cadastrar categoria'. mysqli_error($cnx)); }
        return 'Categoria cadastrada com sucesso!';

    }
    
    
    function pegartodascategorias(){
        
        $sql= "SELECT * FROM categoria";
        $resultado = mysqli_query(conn(), $sql);
        $categorias = array();
        
        while ($linha = mysqli_fetch_assoc($resultado)){
            $categorias[] = $linha;
        }
        return $categorias;
    }

function deletarcategoria($idcategoria){
    $sql = "DELETE FROM categoria where idcategoria = $idcategoria";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    
    if (!resultado){
        die('Erro ao deletar categoria' . mysqli_error($cnx));
    }
    return 'Categoria cadastrada com sucesso!';
}