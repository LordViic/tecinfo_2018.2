<?php
 function getConnection() {
   $link = mysqli_connect('localhost', 'root', '', 'projeto_aula07', '3306');
   mysqli_set_charset($link, 'utf8');
   return $link;
 }
 if(!getConnection()) {
   echo 'Falha ao abrir conexão, erro sob o número : ' . mysqli_errno() . PHP_EOL;
   echo 'A mensagem do erro: ' .mysqli_error() . PHP_EOL;
   exit; 
 }





 ?>
