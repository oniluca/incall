<?php
  //si no existe session activa redirige a login
  if(empty($_SESSION['login'])){
    header('location:'.HOME.'views/login.php');
  }

?>