
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Hexashop - Product Detail Page</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/himperius-black.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Início</a></li>
                            <li class="scroll-to-section"><a href="masculino.php">Homens</a></li>
                            <li class="scroll-to-section"><a href="feminino.php">Mulheres</a></li>
                            <li class="scroll-to-section"><a href="infantil.php">Infantil</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Páginas</a>
                                <ul>
                                    <li><a href="about.html">Sobre Nós</a></li>
                                    <li><a href="products.php">Produtos</a></li>
                                    
                                    <li><a href="contact.html">Contato</a></li>
                                </ul>
                            </li>
                           
                            <li class="scroll-to-section"><a href="index.php">Explore</a></li>
                            <li class="scroll-to-section">
                            <?php
                            session_start();
                              if (isset($_SESSION['email'])) {
                                $firstName = explode(' ', $_SESSION['name'])[0];
                                echo "<a href='php-requests/user-info.php'>" . $firstName . "</a>";
                              } else {
                                echo '<a href="login.html">Entrar</a>';
                              }
                            ?>
                        </li>
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
                       
                        <?php
                       
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "himperius-produtos";

                        
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        
                        if (isset($_GET['id'])) {
                            $product_id = $_GET['id'];

                            
                            $sql = "SELECT * FROM produtos WHERE id = $product_id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                
                                $row = $result->fetch_assoc();
                                $product_name = $row['nome'];
                                $product_price = '$' . $row['preco'];
                                $product_image = $row['imagem'];
                                $product_description = $row['descricao'];
                                $product_rating = $row['avaliacao'];
                                $product_owner = !empty($row['dono']) ? $row['dono'] : "Desconhecido";

                                echo "<h2>$product_name</h2>";
                            } else {
                                echo "Produto não encontrado.";
                            }
                        } else {
                            echo '<font color="white">ID do produto não especificado.</font>';
                        }

                        // Fecha a conexão
                        $conn->close();
                        ?>
                        <!-- Fim do PHP para obter informações do produto -->
                         <br>
                        <span>Informações sobre o produto!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
    <div class="container">
        <div class="row">
            <?php if (isset($product_name)): ?>
                <div class="col-lg-8">
                    <div class="left-images">
                        <!-- Imagens do produto -->
                        <?php if (isset($product_image)): ?>
                            <img src='product-images/<?php echo $product_image; ?>' alt='<?php echo $product_name; ?>' style='max-width: 400px; max-height: 400px; width: auto; height: auto;'>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <!-- Informações do produto -->
                        <h4><?php echo $product_name; ?></h4>
                        <span class='price'><?php echo $product_price; ?></span>

                        <!-- Estrelas de avaliação -->
                        <ul class='stars'>
                            <?php
                            $rating = intval($product_rating);
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $rating) {
                                    echo "<li><i class='fa fa-star'></i></li>";
                                } else {
                                    echo "<li><i class='fa fa-star-o'></i></li>";
                                }
                            }
                            ?>
                        </ul>

                        <div id="message" style="display: none;" class="alert alert-success">
                            Produto adicionado ao carrinho!
                        </div>

                        <span><?php echo $product_description; ?></span>

                        <!-- Rodapé do produto -->
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p><?php echo "Produto enviado por: " . $product_owner; ?></p>
                        </div>

                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>Nº de Pedidos</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" step="1" min="1" id="quantityInput" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                        </div>

                        <div class="total">
                            <h4>Total: <span id="totalPrice">$<?php echo $product_price; ?></span></h4>
                           
                            <div class="main-border-button">
                                <a href='php-requests/add-cart-item.php?id_produto=<?php echo $row['id']; ?>&quantidade=' id="addToCart">Adicionar ao Carrinho</a>
                            </div>

                        </div>
                        <!-- Fim do rodapé do produto -->

                    </div>
                </div>
            <?php else: ?>
                <div class="col-lg-12">
                    <p>Produto não encontrado.</p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- ***** Product Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/Himperius-black.png" alt="logo da himperius">
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

<!-- ***** jQuery ***** -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- ***** Bootstrap ***** -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- ***** Plugins ***** -->
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

<!-- ***** Global Init ***** -->
<script src="assets/js/custom.js"></script>

<!-- Adicione este script no final do seu arquivo HTML, após a mensagem -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('addToCart').addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir o comportamento padrão de seguir o link

            var quantidade = document.getElementById('quantityInput').value;
            var url = this.href + quantidade; // Concatenar a quantidade ao URL

            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);

            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 400) {
                    // Requisição foi bem-sucedida
                    document.getElementById('message').style.display = 'block';
                    setTimeout(function() {
                        document.getElementById('message').style.display = 'none';
                    }, 2000); // Ocultar a mensagem após 2 segundos (2000 milissegundos)
                } else {
                    // Houve um erro na requisição
                    console.error('Erro ao adicionar produto ao carrinho.');
                }
            };

            xhr.onerror = function() {
                console.error('Erro ao realizar a requisição.');
            };

            xhr.send();

            return false;
        });
    });
</script>



</body>
</html>