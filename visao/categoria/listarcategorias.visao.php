
<h2>Listar Categorias</h2>

<table clas="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Categoria</th>


        </tr>
    </thead>

    <?php foreach ($categoria as $categoria): ?>

        <tr>
            <td><?= $categoria['idcategoria'] ?></td>
            <td><?= $categoria['categoria'] ?></td>

            <td><a href="./categoria/ver/<?= $categoria ['idcategoria'] ?>">Detalhes</a></td>
            <td><a href ="./categoria/editar/<?= $categoria['idcategoria'] ?>">Alterar</a></td>
            <td><a href ="./categoria/deletar/<?= $categoria['idcategoria'] ?>">Deletar</a></td>
        </tr>

    <?php endforeach; ?>

</table>
<br>
<a href="./categoria/adicionar" class="btn btn-primary">Nova categoria</a>
