<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>


<form action="" method="POST">
    E-mail:<input type="text" name="email" value="<?=@$cliente['email']?>"><br><br>
    Senha:<input type="password" name="senha1" value="<?=@$cliente['senha']?>"><br><br>
    <button type="submit">Enviar</button>
</form>
