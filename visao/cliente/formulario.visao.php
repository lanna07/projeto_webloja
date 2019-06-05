<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>


<form action="" method="POST">
    E-mail:<input type="text" name="email"><br><br>
    Senha:<input type="password" name="senha1"><br><br>
    <button type="submit">Enviar</button>
</form>
