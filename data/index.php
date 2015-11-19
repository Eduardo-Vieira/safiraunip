<?php
if (!isset($_SESSION)) {
      session_start();
      if (!empty($_SESSION['logado']))
        return header('location: ../index.php');
      {
        $_SESSION['logado'] = '0';
        return header('location: ../index.php');

      }
    }
?>