<h2>Listar Produtos dos Carrinho</h2>

<table clas="table">
    <thead>
        <tr>
            <th>NOME</th>
            <th>PREÇO</th>            
        </tr>
    </thead>

    <?php foreach ($produtos as $produto): ?>

        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>

            <td><a href ="./carrinho/deletar/<?= $produto['idproduto'] ?>">Deletar</a></td>
        </tr>

    <?php endforeach; ?>

</table>
<br>
<a href="produto/adicionar" class="btn btn-primary">Novo Produto</a>