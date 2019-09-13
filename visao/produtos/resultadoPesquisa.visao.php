<h2>Resultados da pesquisa</h2>
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
            <td><?= $produto['preco'] ?></td><br>
        </tr>
    <?php endforeach; ?>

</table> 
<br>