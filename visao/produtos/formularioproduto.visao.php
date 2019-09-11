<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>


<form action="" method="POST">
    Nome :<input type="text" name="nome" value="<?= @$produto['nome'] ?>"><br><br>
    Descrição:<input type="text" name="descricao" value="<?= @$produto['descricao'] ?>"><br><br>
    Quantidade:<input type="" name="quantidade" value="<?= @$produto['nome'] ?>"><br><br>
    Preço:<input type="" name="preco" value="<?= @$produto['preco'] ?>"><br><br>
    <select name="idcategoria">
        <option value="">Categorias</option>
        <?php foreach ($categorias as $categoria): ?>
            <option value="<?= @$categoria['idcategoria'] ?>"><?= @$categoria['categoria'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <head>
        <meta charset="utf-8">
        <title>Inserir Imagem</title>
    </head>
    <body>
        <form action="produto/adicionar" method="POST" enctype="multipart/form-data">

            <input type="file" name="imagem">
        </form>
    </body>

    <button type="submit">Enviar</button>
</form>
