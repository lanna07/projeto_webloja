<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'></head>
</head>
<link rel="stylesheet" href="./publico/css/app.css">
</head>

<div id="it">
    <div id="colum">
        <a id="img" href="index.html"><img id="fundo" src="./publico/imgs/logaster.png"></a>
        <a href="cart.html"><button class="button button5" title="Carrinho" ><i class='fas fa-cart-plus' ></i></button></a>
        <a href="login.html"><button class="button button5" title="Login"><i class='fas fa-user'></i></button></a>
        <input id="pesquisa" type="text" placeholder="Pesquisar ">
        <button class="button" id="lupa" title="Pesquisar"><i class="fa fa-search"></i></button>

    </div>
    <div class="navbar">
        <a href="index.html">Home</a>
        <a href="roupas.html">Produtos</a>
        <a href="adm.html">Seção Administrador</a>
        <a href="cart.html">Carrinho</a>
        <a href="cad.html">Cadastrar-se</a>
    </div>
</div>

<body class="container">
    <main class="container" id="cssaula">
        <?php require $viewFilePath; ?>
        <a href="cliente/listarclientes">Listar todos os clientes</a><br><br>
        <a href="produto/listarprodutos">Listar todos os produtos</a>   
    </main>


    <div id="rodape">	
        <div id="r">
            <div class="lista">
                <span class="titulo">SEU PERFIL</span>
                <ul>
                    <li><a href = "#">Minha conta</a></li>
                    <li><a href = "#">Meus pedidos</a></li>
                    <li><a href = "#">Meu carrinho</a></li>
                </ul>
            </div>	

            <div class="lista">
                <span class="titulo">AJUDA</span>
                <ul>
                    <li><a href = "#">Como comprar </a></li>
                    <li><a href = "#">Entrega e frete</a></li>
                    <li><a href = "#">Trocas e devoluções</a></li>
                    <li><a href = "#">Formas de pagamento</a></li>
                </ul>
            </div>	

            <div class="lista">
                <span class="titulo">FALE CONOSCO</span>
                <ul>
                    <li><a href = "#">Central de Atendimento</a></li>
                    <li><a href = "#">SAC 15 99604 7336</a></li>
                    <li><a href = "#">sac@fabulouscloset.com.br</a></li>
                    <li><a href = "#">Horários de atendimento</a></li>
                </ul>
            </div>		

            <div class="lista">
                <span class="titulo">FORMAS DE PAGAMENTO</span>
                <ul>
                    <li id="pagamento"><a href = "#"><i style='font-size:30px' class='fab'>&#xf1f0;</i></a></li>
                    <li id="pagamento"><a href = "#"><i style='font-size:30px' class='fab'>&#xf1f1;</i></a></li>
                    <li id="pagamento"><a href = "#"><i style='font-size:30px' class='fab'>&#xf24c;</i></a></li>
                    <li id="pagamento"><a href = "#"><i style='font-size:33px' class='fas'>&#xf3d1;</i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
