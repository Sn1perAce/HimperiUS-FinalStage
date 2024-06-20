<?php
session_start();

if (isset($_SESSION['email'])) {
    $email_usuario = $_SESSION['email'];
} else {
    http_response_code(401); // Unauthorized
    echo "Erro: Usuário não está logado.";
    exit;
}

if (!isset($_GET['id_produto'])) {
    http_response_code(400); // Bad Request
    echo "Erro: ID do produto não fornecido.";
    exit;
}

if (!isset($_GET['quantidade'])) {
    $quantidade_adicionar = 1;
} else {
    $quantidade_adicionar = intval($_GET['quantidade']);
}

$id_produto = $_GET['id_produto'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    http_response_code(500); // Internal Server Error
    die("Conexão falhou: " . $conn->connect_error);
}

$sql_check = "SELECT id_produto, quantidade FROM carrinho WHERE email_usuario = ? AND id_produto = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("si", $email_usuario, $id_produto);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    $stmt_check->bind_result($id_produto_existente, $quantidade_existente);
    $stmt_check->fetch();

    $nova_quantidade = $quantidade_existente + $quantidade_adicionar;

    $sql_update = "UPDATE carrinho SET quantidade = ? WHERE email_usuario = ? AND id_produto = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("isi", $nova_quantidade, $email_usuario, $id_produto);
    if ($stmt_update->execute()) {
        echo "Quantidade do produto atualizada no carrinho!";
    } else {
        http_response_code(500); // Internal Server Error
        echo "Erro ao atualizar quantidade: " . $conn->error;
    }
} else {
    $sql_insert = "INSERT INTO carrinho (email_usuario, id_produto, quantidade) VALUES (?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("sii", $email_usuario, $id_produto, $quantidade_adicionar);
    if ($stmt_insert->execute()) {
        echo "Produto adicionado ao carrinho!";
    } else {
        http_response_code(500); // Internal Server Error
        echo "Erro ao adicionar produto ao carrinho: " . $conn->error;
    }
}

$stmt_check->close();
if (isset($stmt_insert)) {
    $stmt_insert->close();
}
if (isset($stmt_update)) {
    $stmt_update->close();
}
$conn->close();

http_response_code(200);
exit;
?>
