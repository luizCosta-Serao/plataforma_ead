<?php

  class Site {
    // Verificar se aluno está logado
    public static function isLoginStudent() {
      return isset($_SESSION['login-aluno']) ? true : false;
    }
        
  }

?>