<?php
require 'conexao.php';
function create($nome, $email) {
  $link = getConnection();
  $query = "insert into tb_clientes(nome, email) values ('{$nome}', '{$email}')";
  mysqli_query($link, $query);
  if(!$link) {
    mysqli_close($link);
  }
}

create('Luis', 'luis@gmail.com');
