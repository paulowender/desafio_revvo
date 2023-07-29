<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEO</title>
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php require_once 'template/header.php'; ?>
    <!-- Carousel -->
    <div class="carousel-container">
        <div class="carousel-track">
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=1" alt="Banner 1">
            </div>
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=2" alt="Banner 2">
            </div>
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=3" alt="Banner 3">
            </div>
            <div class="carousel-slide">
                <img src="https://picsum.photos/1440/335?random=4" alt="Banner 4">
            </div>
        </div>
        <div class="carousel-indicator"></div>
        <button class="carousel-prev"><i class="fa fa-chevron-left"></i></button>
        <button class="carousel-next"><i class="fa fa-chevron-right"></i></button>
    </div>
    <div class="content">
        <div class="grid">
            <!-- Conteúdo do pagina -->
            <?= $content ?>
        </div>
    </div>

    <?php require_once 'template/footer.php'; ?>

    <script src="assets/js/script.min.js"></script>
</body>

</html>