<form class="login" method="post">
  <?php

    if(isset($_POST['login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = MySql::connect()->prepare("SELECT * FROM `alunos` WHERE email = ? AND senha = ?");
      $sql->execute(array($email, $password));
      if ($sql->rowCount() === 1) {
        $info_aluno = $sql->fetch();
        $_SESSION['login-aluno'] = true;
        $_SESSION['aluno-email'] = $email;
        $_SESSION['aluno-nome'] = $info_aluno['nome'];
        $_SESSION['aluno-id'] = $info_aluno['id'];
        header('Location: '.INCLUDE_PATH);
        die();
      } else {
        echo '<p>Senha ou Email incorretos</p>';
      }
    }

  ?>

  <label for="email">Email</label>
  <input type="email" name="email" id="email">

  <label for="password">Senha</label>
  <input type="password" name="password" id="password">

  <input type="submit" name="login" value="Login">
</form>