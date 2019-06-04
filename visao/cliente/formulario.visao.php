<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>


<form action="" method="POST">
    email:<input type="text" name="email"><br><br>
    senha:<input type="password" name="senha1"><br><br>
    <button type="submit">Enviar</button>
</form>