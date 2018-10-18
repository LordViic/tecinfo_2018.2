<?php
require 'crude.php';
if($_post) {
  $nome = $_POST['txtNome'];
  $email = $_POST['txtEmail'];
  create($nome, $email);
  header('Location: index.html');
  die();
}

?>
