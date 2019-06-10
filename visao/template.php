<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">


        
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

        <br>
        <a href="cliente/listarclientes">Listar todos os clientes</a><br><br>
        <a href="produto/listarprodutos">Listar todos os produtos</a>
    </body>
</html>
