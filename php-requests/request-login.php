<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verificação da senha sem hash
    if ($password === $row['senha']) {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['nome']; 
        header("Location: ../index.php"); 
        exit();
    } else {
        header("Location: error.php?msg=" . urlencode("Senha incorreta"));
        exit();
    }
} else {
    header("Location: error.php?msg=" . urlencode("Usuário não encontrado"));
   
}

$conn->close();
?>
