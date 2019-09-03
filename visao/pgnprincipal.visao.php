<?php ?>

<link rel="stylesheet" href="./publico/css/pgnp.css">

<h1 id="P1">Página Principal</h1>

<h2>Produtos cadastrados</h2>
<table clas="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>            
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>

        <tr>

            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
        </tr>
</table>

    <?php endforeach; ?>

</table>