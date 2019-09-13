<h2>VER DETALHES DO CLIENTE</h2>
<p><strong>Id: </strong><?= $cliente['id'] ?> </p>
<p><strong>Email: </strong><?= $cliente['email'] ?> </p>
<p><strong>Senha: </strong><?= $cliente['senha'] ?> </p>
<br><br>

<h2>VER ENDERECOS CADASTRADOS</h2>
<table>
    <thead>
        <tr>
            <th>logradouro</th>
            <th>numero</th>
            <th>complemento</th>
            <th>bairro</th>
            <th>cidade</th>
        </tr>
    </thead>
<?php foreach ($enderecos as $linha): ?>
    <tr>
        <td><?=$linha['logradouro']?></td>
        <td><?=$linha['numero']?></td>
        <td><?=$linha['complemento']?></td>
        <td><?=$linha['bairro']?></td>
        <td><?=$linha['cidade']?></td>
    </tr>
<?php endforeach; ?> 
</table>
<br><br>

<td><a href="./endereco/novoende/<?=$cliente['id']?>">Adicionar novo endereço</a></td>
