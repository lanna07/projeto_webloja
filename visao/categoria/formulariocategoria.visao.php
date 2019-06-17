<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>


<form action="" method="POST">
    Categoria:<input type="text" name="categoria"><br><br>
    Descrição:<input type="password" name="descricao"><br><br>
    Sub-categoria:<input type="password" name="subcategoria"><br><br>
    <button type="submit">Enviar</button>
</form>
