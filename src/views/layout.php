<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>LEO</title>
    <!-- Adicione seus arquivos CSS e JavaScript aqui -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Cabeçalho -->
    <header class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="../../assets/img/logo.png" alt="Logo">
            </div>
            <div class="navbar-search">
                <input id="search" type="text" placeholder="Pesquisar cursos...">
                <span class="fa fa-search search-icon"></span>
            </div>
        </div>
        <div class="divider-vertical"></div>
        <div class="navbar-right">
            <div class="user-info">
                <img src="https://picsum.photos/200/200.jpg" alt="Foto do Usuário">
                <div class="user-details">
                    <p class="welcome">Seja bem-vindo</p>
                    <p class="user-name">Paulo Wender</p>
                </div>
                <span><i class="fa fa-caret-down"></i></span>
            </div>
        </div>
    </header>
    <!-- Carousel -->
    <div class="carousel-container">
        <div class="carousel-track">
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=1" alt="Imagem 1">
            </div>
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=2" alt="Imagem 2">
            </div>
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=2" alt="Imagem 2">
            </div>
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=3" alt="Imagem 3">
            </div>
        </div>
        <div class="carousel-indicator"></div>
        <button class="carousel-prev"><i class="fa fa-chevron-left"></i></button>
        <button class="carousel-next"><i class="fa fa-chevron-right"></i></button>
    </div>

    <!-- Conteúdo específico da view -->
    <main class="content">
        <?php echo $content; ?>
    </main>

    <!-- Rodapé comum -->
    <footer class="footer">

        <div class="footer_logo">
            <img src="../../assets/img/logo_footer.png" alt="Logo">
        </div>
        <div class="copyright">
            Copyright <?php echo date('Y'); ?> - All rights reserved.
        </div>
    </footer>

    <!-- Adicione seus scripts JavaScript aqui -->
    <script src="../../assets/js/script.min.js"></script>
</body>

</html>