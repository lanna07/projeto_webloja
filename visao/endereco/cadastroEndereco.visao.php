<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>

<br><br>
    <form action="" method="POST">
        Logradouro: <input type="text" class="caixaEntraInfo" name="logradouro" value="<?=@$endereco['logradouro']?>"><br><br>
        Número: <input type="text" class="caixaEntraInfo" name="numero" value="<?=@$endereco['numero']?>"><br><br>
        Complemento: <input type="text" class="caixaEntraInfo" name="complemento" value="<?=@$endereco['complemento']?>"><br><br>
        Bairro: <input type="text" class="caixaEntraInfo" name="bairro" value="<?=@$endereco['bairro']?>"><br><br>
        Cidade: <input type="text" class="caixaEntraInfo" name="cidade" value="<?=@$endereco['cidade']?>"><br><br>
        CEP: <input type="text" class="caixaEntraInfo" name="cep" value="<?=@$endereco['cep']?>"><br><br>
        <button class="botao">Cadastrar</button>
    </form>
