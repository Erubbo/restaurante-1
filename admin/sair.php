<?php
session_start();

unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioNiveisAcessoId'],
    $_SESSION['usuarioEmail'],
    $_SESSION['usuarioSenha'],
);

$_SESSION['logindeslogado'] = "deslogado com sucesso";

header("Location: index.php");


?>