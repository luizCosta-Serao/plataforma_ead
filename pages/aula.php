<?php
  $id_aula = $_GET['id'];
  $aula = MySql::connect()->prepare("SELECT * FROM `aulas_curso` WHERE id = ?");
  $aula->execute(array($id_aula));
  if ($aula->rowCount() === 0) {
    header('Location: '.INCLUDE_PATH);
    die();
  }
  $aula = $aula->fetch();
?>

<section>
  <h2><?php echo $aula['nome']; ?></h2>
  <div>
    <iframe src="<?php echo $aula['link_aula'] ?>" frameborder="0"></iframe>
  </div>
</section>