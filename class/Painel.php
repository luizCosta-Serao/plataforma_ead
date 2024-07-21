<?php

  class Painel {
    // Verificar se está logado
    public static function isLogin() {
      return isset($_SESSION['login']) ? true : false;
    }
  }

?>