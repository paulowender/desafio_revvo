  <h2>MEUS CURSOS</h2>
  <div class="grid-list">
    <?php foreach ($courses as $row) : ?>
      <div class="grid-item">
        <img src="../../../assets/img/course.png" alt="Imagem do Curso">
        <div class="card-content">
          <div class="card-title"><?= strtoupper($row['title']) ?></div>
          <div class="card-summary"><?= $row['summary'] ?></div>
          <a href="#" class="btn">VER CURSO</a>
        </div>
      </div>
    <?php endforeach; ?>
    <a href="#" class="btn">
      <div class="grid-new-item">
        <img src="../../../assets/img/button_add.png" alt="Novo curso">
      </div>
    </a>
  </div>