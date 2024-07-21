<section>
  <h1>Cadastrar Nova Aula</h1>

  <?php
    if(isset($_POST['cadastrar'])) {
      $modulo_id = $_POST['modulo_id'];
      $nome = $_POST['nome'];
      $link = $_POST['link'];

      if (
        $nome === '' ||
        $link === ''
      ) {
        Painel::alert('erro', 'Você precisa preencher todos os campos');
        return;
      }

      $sql = MySql::connect()->prepare("INSERT INTO `aulas_curso` VALUES (null, ?, ?, ?)");
      $sql->execute(array($modulo_id, $nome, $link));
      Painel::alert('sucesso', 'Aula cadastrada com sucesso');
    }
  ?>

  <form action="" method="post">
    <label for="modulo_id">Selecione o módulo da aula</label>
    <select name="modulo_id" id="modulo_id">
      <?php
        $modulos = MySql::connect()->prepare("SELECT * FROM `modulos_curso`");
        $modulos->execute();
        $modulos = $modulos->fetchAll();
        foreach ($modulos as $key => $value) {
      ?>
        <option value="<?php echo $value['id'] ?>">
          <?php echo $value['nome'] ?> 
        </option>
      <?php } ?>
    </select>

    <label for="nome">Nome da aula</label>
    <input type="text" name="nome" id="nome">

    <label for="link">Link da aula para o iframe</label>
    <input type="text" name="link" id="link">

    <input type="submit" name="cadastrar" value="Cadastrar">
  </form>
</section>