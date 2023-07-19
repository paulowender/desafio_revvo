<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>CRUD</h1>

  <?php
  // Conexão com o banco de dados
  $conn = new mysqli('localhost', 'seu_usuario', 'sua_senha', 'seu_banco_de_dados');
  if ($conn->connect_error) {
    die('Erro ao conectar ao banco de dados: ' . $conn->connect_error);
  }

  // Consulta dos registros
  $result = $conn->query('SELECT * FROM usuarios');
  if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nome</th><th>Email</th></tr>';
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['nome'] . '</td>';
      echo '<td>' . $row['email'] . '</td>';
      echo '</tr>';
    }
    echo '</table>';
  } else {
    echo 'Nenhum registro encontrado.';
  }

  // Fechamento da conexão
  $conn->close();
  ?>

  <script src="script.js"></script>
</body>
</html>
