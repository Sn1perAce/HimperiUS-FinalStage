<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himperius-produtos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$avaliacao = $_POST['avaliacao'];
$estoque = $_POST['estoque'];
$dono = $_POST['dono'];

$target_dir = "../../../product-images/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

if ($uploadOk == 0) {
    echo "Desculpe, ocorreu um erro ao enviar o arquivo.";
} else {
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
        echo "O arquivo " . htmlspecialchars(basename($_FILES["imagem"]["name"])) . " foi enviado com sucesso.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar o arquivo.";
    }
}

$sql = "INSERT INTO produtos (nome, preco, descricao, imagem, categoria, avaliacao, estoque, dono)
        VALUES ('$nome', '$preco', '$descricao', '" . basename($_FILES["imagem"]["name"]) . "', '$categoria', '$avaliacao', '$estoque', '$dono')";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
    header("Location: admin-request-status.php?message=Product_Insert_Sucess");

} else {
    echo "Erro ao cadastrar o produto: " . $conn->error;
}

$conn->close();
?>
