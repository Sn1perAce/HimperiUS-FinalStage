<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit;
}

$email = $_SESSION['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$adminEmail = 'gabriel@admin.com.br';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE email = ? AND email = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro na preparação da consulta SQL: " . $conn->error);
}

$stmt->bind_param("ss", $email, $adminEmail);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 0) {
   
    $stmt->close();
    $conn->close();

    header("Location: error.php?msg=" . urlencode("Você não tem permissão para acessar essa página!"));
    die();
}

$stmt->close();
$conn->close();
?>
