<link rel="stylesheet" href="./publico/css/car.css">
<h2 id = "nome" >Carrinho</h2>

<table clas="table" id="arara">
    <thead>
        <tr id=" tr">
            <th id="tr">NOME</th>
            <th id="tr">PREÇO</th>            
        </tr>
    </thead>

    <?php foreach ($produtos as $produto): ?>

        <tr>
            <td id="tr"><?= $produto['nome'] ?></td>
            <td id="tr"><?= $produto['preco'] ?></td>

            <td><a href="./car/deletar/<?=$produto['idproduto']?>"><button class="botao">Remover</button></a></td>
        </tr>

<?php endforeach; ?>

</table>
<br>
<a href="produto/adicionar" class="btn btn-primary" id="aves">Novo Produto</a>