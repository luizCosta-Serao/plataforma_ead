<section>
  <h1>Cadastrar Novo Módulo</h1>

  <?php
    if(isset($_POST['cadastrar'])) {
      $nome = $_POST['nome'];

      if ($nome === '') {
        Painel::alert('erro', 'Você precisa preencher o campo nome do módulo');
        return;
      }

      $sql = MySql::connect()->prepare("INSERT INTO `modulos_curso` VALUES (null, ?)");
      $sql->execute(array($nome));
      Painel::alert('sucesso', 'Módulo cadastrado com sucesso');
    }
  ?>

  <form action="" method="post">
    <label for="nome">Nome do Módulo</label>
    <input type="text" name="nome" id="nome">

    <input type="submit" name="cadastrar" value="Cadastrar">
  </form>
</section>