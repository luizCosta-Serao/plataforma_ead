<?php include('./config.php') ?>
<?php
  if (isset($_GET['loggout'])) {
    session_destroy();
    header('Location: '.INCLUDE_PATH);
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
</head>
<body>
  <header>
    <div class="logo">LOGO</div>
    <nav class="menu">
      <ul>
        <?php
          if (Site::isLoginStudent()) {
        ?>
          <li><?php echo $_SESSION['aluno-nome']; ?></li>
          <li><a href="<?php echo INCLUDE_PATH ?>?loggout">Sair</a></li>
        <?php } else { ?>
          <li><a href="<?php echo INCLUDE_PATH; ?>login-aluno">Login</a></li>
        <?php } ?>
      </ul>
    </nav>
  </header>

  <section class="content">
    <?php
      $url = isset($_GET['url']) ? $_GET['url'] : 'home';
      if (file_exists('pages/'.$url.'.php')) {
        include('pages/'.$url.'.php');
      } else {
        include('pages/home.php');
      }
    ?>
  </section>
</body>
</html>