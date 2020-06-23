<?php 
  session_start();

  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') { // isset verifica se o índice é existente e !isset verifica se ele não é existente
   header('Location: index.php?login=erro2');
  }



?>