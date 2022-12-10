<?php
session_start();
echo "Usuário ". $_SESSION['usuarioNome'];

if(isset($_SESSION['usuarioNome']) == ""){
    header('Location: index.php');

    $_SESSION['loginErro'] = "Voce não efetuou o login !";
}
?>
<br>
<a href="sair.php">Sair</a>













