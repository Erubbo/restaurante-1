<?php

include('conexao.php');

$id = $_GET['idprato'];

$id = $_POST['nome'];
$nome = $_POST['codigo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sql = "UPDATE 'tb_formulario' set nome = '$nome' email = '$email' telefone = '$telefone' assunto = '$assunto' mensagem = '$mensagem'
WHERE id = $id";

$conexao->query($sql);

$conexao->close();

header('location: listar-pratos.php');