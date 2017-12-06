<?php
include_once('cliente.php');

$cliente = new Cliente();
$operacao = $cliente->remove($_GET['id']);


if ($operacao === TRUE){
  header("Location: http://localhost/index.php?mensagem=TRUE");
  die();
}else {
  header("Location: http://localhost/index.php?mensagem=FALSE");
  die();
}
