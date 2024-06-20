

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>HimperiUs - Feminino</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
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
                        <h2>O melhor do catálogo Feminino</h2>
                        <span>Você &amp; vai amar nossos produtos.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Feminino</h2>
                        <span>Exibindo resultados para Feminino.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himperius-produtos";

$limit = 6;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$category = "feminino";

$sql = "SELECT * FROM produtos WHERE categoria = '$category' LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <div class="container">
        <div class="row">
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="product-images/<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome']; ?>" style="width: 100%; height: auto;">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $row['nome']; ?></h4>
                            <span>$<?php echo $row['preco']; ?></span>
                            <ul class="stars">
                                <?php
                                $rating = 5; // Aqui você pode definir a avaliação do produto dinamicamente
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<li><i class="fa fa-star"></i></li>';
                                    } else {
                                        echo '<li><i class="fa fa-star-o"></i></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination">
                    <ul>
                        <?php
                        $sql_total = "SELECT COUNT(id) AS total FROM produtos WHERE categoria = '$category'";
                        $result_total = $conn->query($sql_total);
                        $row_total = $result_total->fetch_assoc();
                        $total_produtos = $row_total['total'];

                        $total_paginas = ceil($total_produtos / $limit);

                        for ($i = 1; $i <= $total_paginas; $i++) {
                            echo '<li><a href="?category=' . $category . '&page=' . $i . '">' . $i . '</a></li>';
                        }
                        ?>
                        <li><a href="#">></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
} else {
    echo "Nenhum produto encontrado.";
}
?>


                
               
    
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
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
