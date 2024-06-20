<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: #fff;
        }

        .container {
            text-align: center;
        }

        .grande {
            font-size: 54px;
            color: #f0f0f0;
        }

        h2 {
            font-size: 54px;
            color: #f0f0f0;
        }

        .main-border-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .main-border-button a:hover {
            background-color: #555;
        }
    </style>
    <link rel="stylesheet" href="../../../assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="../../../assets/css/login.css">
</head>

<body>
    <div class="container">
        <h2>Painel de Administração</h2>

        <?php
        session_start();
        // Verifica se foi passado o parâmetro 'message' via GET
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            switch ($message) {
                case 'Product_Insert_Sucess':
                    echo "<p class='grande'>Produto criado com sucesso!</p>";
                    break;
                case 'user_manage_success':
                    echo "<p class='grande'>Usuário gerenciado com sucesso!</p>";
                    break;
                default:
                    echo "<p class='grande'>Ação realizada com sucesso!</p>";
                    break;
            }
        }
        ?>

        <br>

        <div class="main-border-button">
            <a href="../../../index.php">Voltar para a página inicial</a>
        </div>
    </div>
</body>

</html>
