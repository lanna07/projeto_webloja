
<h2>Listar clientes</h2>

<table clas="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    
    <?php foreach ($clientes as $cliente): ?>
    
    <tr>
        <td><?=$cliente['id']?></td>
        <td><?=$cliente['nome']?></td>
        <td><?=$cliente['email']?></td>
    </tr>
    
    <?php endforeach; ?>
    
</table>

<a href="Cliente/adicionar" class="btn btn-primary">Novo cliente</a>