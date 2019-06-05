
<h2>Listar clientes</h2>

<table clas="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>Ver detalhes</th>
        </tr>
    </thead>
    
    <?php foreach ($clientes as $cliente): ?>
    
    <tr>
        <td><?=$cliente['id']?></td>
        <td><?=$cliente['email']?></td>
        <td><a href="./cliente/ver/<?=$cliente['id']?>">Ver</a></td>
    </tr>
    
    <?php endforeach; ?>    
</table>

<a href="cliente/adicionar" class="btn btn-primary">Novo cliente</a>