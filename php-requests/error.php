<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro no Registro</title>
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

        .main-border-button a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: 2px solid #333;
            transition: all 0.3s ease;
        }

        .main-border-button a:hover {
            background-color: #fff;
            color: #333;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="container">
        <h2>Erro no Registro</h2>
        <?php
        if (isset($_GET['msg'])) {
            $mensagem = htmlspecialchars($_GET['msg']);
            echo "<p class='grande'>$mensagem</p>";

            // Verifica se o erro foi durante o login ou registro
            if (strpos($mensagem, 'Senha incorreta') !== false || strpos($mensagem, 'Usuário não encontrado') !== false) {
                echo "<div class='main-border-button'><a href='../login.html'>Voltar para o Login</a></div>";
            } elseif (strpos($mensagem, 'As senhas não coincidem') !== false || strpos($mensagem, 'Erro ao registrar o usuário') !== false) {
                echo "<div class='main-border-button'><a href='../register.html'>Tentar Novamente</a></div>";
            } elseif (strpos($mensagem, 'Você não tem permissão para acessar essa página!') !== false || strpos($mensagem, 'NotPerm') !== false) {
                echo "<div class='main-border-button'><a href='../index.php'>Voltar para a página Inicial.</a></div>";
            }

        } else {
            echo "<p class='grande'>Ocorreu um erro desconhecido.</p>";
            echo "<div class='main-border-button'><a href='../register.html'>Tentar Novamente</a></div>";
        }
        ?>
    </div>
</body>

</html>
