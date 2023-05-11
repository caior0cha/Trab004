<?php 

if(!isset($_SESSION)) {
    session_start();
} else {
    $nome = '';
}

if(!isset($_SESSION['id'])) {
    die("Acesso negado, por favor faça Login.<p><a href=\"SistemaLogin/login.php\">Entrar</a></p>");
}

?>