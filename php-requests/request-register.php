<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$name = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['senha'];
$confirm_password = $_POST['confirm_password'];

if ($password != $confirm_password) {
    header("Location: error.php?msg=" . urlencode("As senhas não coincidem. Por favor, tente novamente."));
    exit();
}

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: sucess.php?nome=" . urlencode($name));
    exit(); 
} else {
    header("Location: error.php?msg=" . urlencode("Erro ao registrar o usuário: " . $conn->error));
   
}

$conn->close();
?>
