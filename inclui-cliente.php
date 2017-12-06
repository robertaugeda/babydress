<?php
include_once('cliente.php');

$cliente = new Cliente();
$cliente = $cliente->criar($_POST['email'], $_POST['senha'], $_POST['nome'], $_POST['rua'],$_POST['bairro'], $_POST['numero'], $_POST['complemento'], $_POST['cep'], $_POST['telefone']);
$operacao = $cliente->inserir();

if ($operacao === TRUE){
  header("Location: http://localhost/index.php?mensagem=TRUE");
  die();
}else {
  header("Location: http://localhost/index.php?mensagem=FALSE");
  die();
}
