<html>
    <head>
        <title>F_C</title>
        <base href="<?= URL_BASE ?>">

        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'></head>
</head>
<link rel="stylesheet" href="./publico/css/app.css">
</head>

<div id="it">
    <div id="colum">
        <a id="img" href="./principal/paginaprincipal"><img id="fundo" src="./publico/imgs/logaster.png"></a>
        <a href="./car/listar"><button class="button button5" title="Carrinho" ><i class='fas fa-cart-plus' ></i></button></a>
        <a href="login.html"><button class="button button5" title="Login"><i class='fas fa-user'></i></button></a>
        <input id="pesquisa" type="text" placeholder="Pesquisar ">
        <button class="button" id="lupa" title="Pesquisar"><i class="fa fa-search"></i></button>

    </div>
    <div class="navbar">
        <a href="./principal/paginaprincipal">Home</a>
        <a href="./produto/listarprodutos">Produtos</a>
        <a href="adm.html">Seção Administrador</a>
        <a href="./car/listar">Carrinho</a>
        <a href="./cliente/olhar">Cadastrar-se</a>
    </div>
</div>

<body class="container">
    <main class="container" id="cssaula">
        <?php require $viewFilePath; ?>
        <br><br>
        <a href="./principal/paginaprincipal" id="aves">Página Principal</a> <br><br>  
        <a href="./car/listar" id="aves">Carrinho</a> <br><br>         
        <a href="./cliente/listarclientes" id="aves">Listar todos os clientes</a><br><br>
        <a href="./produto/listarprodutos" id="aves">Listar todos os produtos</a>   <br><br>
        <a href="./categoria/listarcategorias" id="aves">Listar todos as categorias</a>   
    </main>


    <div id="rodape">	
        <div id="r">
            <div class="lista">
                <span class="titulo">SEU PERFIL</span>
                <ul>
                    <li><a href = "#">Minha conta</a></li>
                    <li><a href = "./car/listar">Meu carrinho</a></li>
                </ul>
            </div>	

            <div class="lista">
                <span class="titulo">AJUDA</span>
                <ul>
                    <li><a href = "#">Como comprar </a></li>
                    <li><a href = "#">Formas de pagamento</a></li>
                </ul>
            </div>	

            <div class="lista">
                <span class="titulo">FALE CONOSCO</span>
                <ul>
                    <li><a href = "#">Central de Atendimento</a></li>
                    <li><a href = "#">SAC 15 99604 7336</a></li>
                    <li><a href = "#">sac@fabulouscloset.com.br</a></li>
                </ul>
            </div>		

        </div>
    </div>
</div>
</body>
</html>
