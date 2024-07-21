<?php include('./config.php') ?>
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
        <li><a href="<?php echo INCLUDE_PATH; ?>login-aluno">Login</a></li>
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