<section>
  <h1>Cadastrar Novo Aluno</h1>

  <?php
    if(isset($_POST['cadastrar'])) {
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      if (
        $nome === '' &&
        $email === '' &&
        $senha === ''
      ) {
        Painel::alert('erro', 'Você precisa preencher todos os campos');
        return;
      }

      $sql = MySql::connect()->prepare("INSERT INTO `alunos` VALUES (null, ?, ?, ?)");
      $sql->execute(array($nome, $email, $senha));
      Painel::alert('sucesso', 'Aluno cadastrado com sucesso');
    }
  ?>

  <form action="" method="post">
    <label for="nome">Nome do aluno</label>
    <input type="text" name="nome" id="nome">

    <label for="email">Email do aluno</label>
    <input type="text" name="email" id="email">

    <label for="senha">Senha do Aluno</label>
    <input type="text" name="senha" id="senha">

    <input type="submit" name="cadastrar" value="Cadastrar">
  </form>
</section>