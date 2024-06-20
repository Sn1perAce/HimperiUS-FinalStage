<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../error.php?msg=" . urlencode("Você não tem permissão para acessar essa página!"));
    exit;
}

$isAdmin = ($_SESSION['email'] === 'gabriel@admin.com.br'); 

if (!$isAdmin) {
    header("Location: ../error.php?msg=" . urlencode("Você não tem permissão para acessar essa página!!"));
    exit;
}

$userInfo = array(
    'name' => $_SESSION['name'],
    'email' => $_SESSION['email'],
    'phone' => 'x',
    'address' => 'x',
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <title>HimperiUS - Adicionar produto</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="../../assets/css/owl-carousel.css">
    <link rel="stylesheet" href="../../assets/css/lightbox.css">
    <style>
        /* Custom CSS styles specific to user-info page */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            color: #555;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        header {
            background-color: #fff;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        .logo img {
            max-width: 150px;
        }

        .user-info-container {
            background-color: #fff;
            margin-top: 30px;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user-info-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .user-info-container p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .user-info-container .button-container {
            margin-top: 20px;
        }

        .main-border-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .main-border-button a:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }

        footer p {
            font-size: 14px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="../../index.php" class="active">Início</a></li>
                       
                        <li class="submenu">
                            <a href="javascript:;">Páginas</a>
                            <ul>
                                <li><a href=" ../../about.html">Sobre Nós</a></li>
                                <li><a href="../../products.php">Produtos</a></li>
                                
                                <li><a href="../../contact.html">Contato</a></li>
                            </ul>
                        </li>
                        
                        <li class="scroll-to-section"><a href="index.php">Explore</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Anexar um produto</h2>
                    <span>Você possui permissão para anexar um produto!</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** User Information Area Starts ***** -->
<section class="section" id="user-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-info-container">
                  
                <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro de Produto</title>
</head>
<body>
    <h2>Formulário de Cadastro de Produto</h2>
    <form action="admin-requests/insert-product-request.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço:</label><br>
        <input type="text" id="preco" name="preco" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" rows="4" cols="50" required></textarea><br><br>

        <label for="imagem">Imagem do Produto:</label><br>
        <input type="file" id="imagem" name="imagem" accept="image/*" required>
        <span style="font-size: 0.8em; color: #888;">(Resolução recomendada: 300px x 400px)</span><br><br>

        <label for="categoria">Categoria:</label><br>
        <select id="categoria" name="categoria" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="infantil">Infantil</option>
            <option value="acessorios">Acessórios</option>
        </select><br><br>

        <label for="avaliacao">Avaliação:</label><br>
        <input type="number" id="avaliacao" name="avaliacao" min="1" max="5" required><br><br>

        <label for="estoque">Estoque:</label><br>
        <input type="number" id="estoque" name="estoque" min="0" required><br><br>

        <label for="dono">Dono:</label><br>
        <input type="text" id="dono" name="dono" required><br><br>

        <input type="submit" value="Cadastrar Produto">
    </form>

    <br>

    <div class="main-border-buttonF">
        <a href="../admin-page.php">Voltar à página de Admin!</a>
    </div>
</body>
</html>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** User Information Area Ends ***** -->

<!-- ***** User Information Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="../../assets/images/Himperius-black.png" alt="logo da himperius">
                    </div>
                    <ul>
                        <li><a href="#">R. do Rosário, 1081 - Angola, Betim - MG, 32604-115</a></li>
                        <li><a href="#">PUC - Betim</a></li>
                        <li><a href="#">x</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Compras &amp; Categorias</h4>
                <ul>
                    <li><a href="#">Compras para Homens</a></li>
                    <li><a href="#">Compras para Mulheres</a></li>
                    <li><a href="#">Compras para Crianças</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Links Úteis</h4>
                <ul>
                    <li><a href="#">Página Inicial</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Contate-nos</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Ajuda &amp; Informação</h4>
                <ul>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Envio</a></li>
                    <li><a href="#">ID de Rastreamento</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Direitos Autorais © 2022 HimperiUS Co., Ltd. Todos os Direitos Reservados. 
                    
                    <br>Design: <a href="https://templatemo.com" target="_parent" title="modelos css gratuitos">TemplateMo</a></p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer End ***** -->

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/quantity.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

<script>
    // You can add your custom JavaScript here if needed
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);
        });
    });
</script>

</body>

</html>
