<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes do Curso</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>Detalhes do Curso</h1>
  </header>
  <main>
    <?php
    // Exemplo de detalhes do curso (normalmente você buscaria os dados de um banco de dados)
    $course = array('id' => 1, 'title' => 'Curso de HTML e CSS', 'description' => 'Aprenda a criar sites com HTML e CSS.');

    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    ?>
  </main>
  <footer>
    <p>Todos os direitos reservados.</p>
  </footer>
</body>
</html>
