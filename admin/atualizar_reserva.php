<?php

include('../includes/conexao.php');

$id = $_GET['idreserva'];

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data = $_POST['data_reserva'];
$mensagem = $_POST['mensagem'];
$numero = $_POST['numero_pessoas'];

$sql = "UPDATE 
tb_reservas 
set nome = '$nome',  telefone = '$telefone', email = '$email', data_reserva = '$data', mensagem = '$mensagem', numero_pessoas = '$numero' 

WHERE id = $id";

$conexao->query($sql);

$conexao->close();

header('location: listar-reservas.php');