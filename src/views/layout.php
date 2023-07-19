<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meu Site</title>
    <!-- Adicione seus arquivos CSS e JavaScript aqui -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.min.css">
</head>
<body>
    <!-- Cabeçalho comum -->
    <header>
        <h1>Meu Site</h1>
        <nav>
            <ul>
                <li><a href="/home">Página Inicial</a></li>
                <li><a href="/home/about">Sobre nós</a></li>
                <!-- Adicione mais itens de menu conforme necessário -->
            </ul>
        </nav>
    </header>

    <!-- Conteúdo específico da view -->
    <main>
        <?php echo $content; ?>
    </main>

    <!-- Rodapé comum -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Meu Site. Todos os direitos reservados.</p>
    </footer>

    <!-- Adicione seus scripts JavaScript aqui -->
    <script src="../../assets/js/script.min.js"></script>
</body>
</html>
