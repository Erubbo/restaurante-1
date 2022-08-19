<?php
include('../includes/conexao.php');



$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_reserva = $_POST['data'];
$mensagem = $_POST['mensagem'];
$pessoas = $_POST['pessoas'];

$sql = "INSERT INTO tb_reservas(`nome`,`telefone`,`email`,`data_reserva`,`mensagem`,`numero_pessoas`)VALUES('$nome','$telefone','$email','$data_reserva','$mensagem','$pessoas')";

$conexao -> query($sql);

$conexao-> close();
?>