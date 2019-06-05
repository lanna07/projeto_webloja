<?php 
    if (ehPost()){
        foreach ($errors as $erro){
            echo "$erro<br>";
        }
    }
?>


<form action="" method="POST">
    Nome :<input type="text" name="nome"><br><br>
    Descrição:<input type="text" name="descricao"><br><br>
    Quantidade:<input type="" name="quantidade"><br><br>
    Preço:<input type="" name="preco"><br><br>
    <button type="submit">Enviar</button>
</form>