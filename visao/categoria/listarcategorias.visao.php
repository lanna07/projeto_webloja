
<h2>Listar Categorias</h2>

<table clas="table">
    <thead>
        <tr>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Sub-catetgoria</th>


        </tr>
    </thead>
    
    <?php foreach ($categoria as $categoria): ?>
    
    <tr>
        <td><?=$categoria['idcategoria']?></td>
        <td><?=$categoria['categoria']?></td>
        <td><?=$categoria['descricao']?></td>
        <td><?=$categoria['subcategoria']?></td>
        <td><a href ="./categoria/deletar/<?=$categoria['idcategoria']?>">Deletar</a></td>
    </tr>
    
    <?php endforeach; ?>
    
</table>
<br>
<a href="categoria/adicionar" class="btn btn-primary">Nova categoria</a>
