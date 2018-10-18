<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'projeto_aula07');
mysqli_set_charset($link,'utf8');
if(!empty($link)){
  echo 'Conexão aberta';
  mysqli_close($link);
} else {
  echo mysqli_errno() . '<br>';
  echo mysqli_error();
}
