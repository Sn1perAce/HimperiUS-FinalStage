

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso no Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            background-color: #f0f0f0; 
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            text-align: center;
        }
        .grande {
            font-size: 54px; 
            color: #f0f0f0;
        }

        h2 {
            color: #f0f0f0;
            font-size: 54px; 
        }
    </style>
    <link rel="stylesheet" href="../assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="../assets/css/login.css"> 
</head>

<body>
    <div class="container">
        <h2>Parabéns!</h2>
        <?php
        session_start();
        if (isset($_GET['nome'])) {
            $nome = htmlspecialchars($_GET['nome']);
            echo "<p class='grande'>Bem-vindo ao Himperius, $nome!</p>";
        } else {
            echo "<p class='grande'>Bem-vindo ao Himperius!</p>";
        }
        ?>
        <br>
        <div class="main-border-button">
            <a href="../login.html">Prosseguir para o Login</a>
        </div>
    </div>
</body>

</html>
