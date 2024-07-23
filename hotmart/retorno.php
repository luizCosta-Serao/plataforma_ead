<?php

  // substituir pelo token
  $tokenHotmart = 'token';

  // Substituir pelo post da hotmart (primeiro item da documentação)
  // $_POST['hottok']
  $hotmartPost = 'post';
  if (isset($hotmartPost)) {
    if ($tokenHotmart == $hotmartPost) {
      // é o post da hotmart;
      
      // $_POST['email'] = email do comprador
      $email = 'example@hotmail.com';
      // $_POST['status']
      $status = 'approved';
      if($status == 'approved') {
        // Inserir no banco de dados o acesso ao curso
      }
    }
  }

?>