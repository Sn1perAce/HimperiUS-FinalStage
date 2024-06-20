<?php
// Inicia a sessão
session_start();

// Encerra a sessão atual
session_destroy();

// Redireciona o usuário para a página de login ou outra página desejada após o logout
header("Location: ../login.html");
exit;
?>
