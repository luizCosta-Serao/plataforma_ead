<?php
  $sql = MySql::connect()->prepare("SELECT * FROM `curso_controle` WHERE aluno_id = ?");
  $sql->execute(array($_SESSION['aluno-id']));
  if ($sql->rowCount() === 1) {
    // Possui o curso
    echo 'possui o curso';
?>
  <section>
    <h2>Escolha o que deseja estudar hoje:</h2>
  </section>

<?php
  } else {
    if (isset($_GET['add-curso'])) {
      $sql = MySql::connect()->prepare("INSERT INTO `curso_controle` VALUES (null, ?)");
      $sql->execute(array($_SESSION['aluno-id']));
    }
?>
  <section>
    <h2>Você ainda não possui o curso!</h2>
    <a href="<?php echo INCLUDE_PATH; ?>area-aluno?add-curso">Comprar agora</a>
  </section>
<?php  } ?>