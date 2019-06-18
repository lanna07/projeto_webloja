<?php ?>

<link rel="stylesheet" href="./publico/css/pgnp.css">

<h2 id="P1">Página Principal</h2>

<table clas="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>QUANTIDADE</th>
            <th>PREÇO</th>

        </tr>
    </thead>

</thead>

<?php foreach ($produtos as $produto): ?>

    <tr>
        <td><?= $produto['idproduto'] ?></td>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['descricao'] ?></td>
        <td><?= $produto['quantidade'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><a href ="./produto/deletar/<?= $produto['idproduto'] ?>">Deletar</a></td>
    </tr>

<?php endforeach; ?>

</table>