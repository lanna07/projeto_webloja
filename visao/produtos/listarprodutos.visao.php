
<h2>Listar Produtos</h2>

<table clas="table">
    <thead>
        <tr>
            <th>NOME</th>
            <th>PREÇO</th>            
            <th>VER DETALHES</th>            

        </tr>
    </thead>

    <?php foreach ($produtos as $produto): ?>

        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>

            <td><a href="./produto/ver/"<?= $produto['idproduto'] ?>">Detalhes</a></td>
            <td><a href ="./produto/editar/<?= $produto['idproduto'] ?>">Alterar</a></td>
            <td><a href ="./produto/deletar/<?= $produto['idproduto'] ?>">Deletar</a></td>
        </tr>

    <?php endforeach; ?>

</table>
<br>
<a href="produto/adicionar" class="btn btn-primary">Novo Produto</a>
