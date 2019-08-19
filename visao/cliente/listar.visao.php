
<h2>Listar clientes</h2>

<table clas="table">
    <thead>
        <tr>
            <th>ID  </th>
            <th>EMAIL  </th>
            <th>SENHA</th>

            
            <th>Ver detalhes</th>
        </tr>
    </thead>
    
    <?php foreach ($clientes as $cliente): ?>
    
    <tr>
        <td><?=$cliente['id']?></td>
        <td><?=$cliente['email']?></td>
        <td><?=$cliente['senha']?></td>
        <td><a href="./cliente/ver/<?=$cliente['id']?>">Detalhes</a></td>
        <td><a href="./cliente/editar/<?=$cliente['id']?>">Alterar</a></td>
        <td><a href="./cliente/deletar/<?=$cliente['id']?>">Deletar</a></td>        
    </tr>
    
    <?php endforeach; ?>    
</table>
<br>
<a href="cliente/olhar" class="btn btn-primary">Novo cliente</a>