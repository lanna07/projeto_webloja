
<h2>Listar Produtos</h2>

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
    
    <?php foreach ($produtos as $produto): ?>
    
    <tr>
        <td><?=$produto['idproduto']?></td>
        <td><?=$produto['nome']?></td>
        <td><?=$produto['descricao']?></td>
        <td><?=$produto['quantidade']?></td>
        <td><?=$produto['preco']?></td>
    </tr>
    
    <?php endforeach; ?>
    
</table>

<a href="produto/adicionar" class="btn btn-primary">Novo Produto</a>
