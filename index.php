<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>HimperiUS - Compre roupas online</title>


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
    
    
    <!-- ***** Início da Área do Cabeçalho ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Início do Logo ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/Himperius-black.png" width="159px">
                    </a>
                    <?php
                    session_start();
                    ?>

                    <!-- ***** Fim do Logo ***** -->
                    <!-- ***** Início do Menu ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Início</a></li>
                        <li class="scroll-to-section"><a href="#men">Masculino</a></li>
                        <li class="scroll-to-section"><a href="#women">Feminino</a></li>
                        <li class="scroll-to-section"><a href="#kids">Infantil</a></li>
                        
                        <li class="submenu">
                            <a href="javascript:;">Páginas</a>
                            <ul>
                                <li><a href="about.html">Sobre Nós</a></li>
                                <li><a href="products.php">Produtos</a></li>
                                <li><a href="contact.html">Contato</a></li>
                            </ul>
                        </li>
                        <!-- 
                        <li class="submenu">
                            <a href="javascript:;">Recursos</a>
                            <ul>
                                <li><a href="#">Página de Recursos 1</a></li>
                                <li><a href="#">Página de Recursos 2</a></li>
                                <li><a href="#">Página de Recursos 3</a></li>
                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Página do Template 4</a></li>
                            </ul>
                        </li>
                        -->
                        
                        <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                        <li class="scroll-to-section">
                            <?php
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
                    <!-- ***** Fim do Menu ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Fim da Área do Cabeçalho ***** -->

<!-- ***** Início da Área do Banner Principal ***** -->
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>Somos a HimperiUS</h4>
                            <span>Tudo que você precisa você encontra aqui!</span>
                            <div class="main-border-button">
                                <a href="products.php">Compre Agora!</a>
                            </div>
                        </div>
                        <img src="assets/images/left-banner-image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Mulheres</h4>
                                        <span>Melhores Roupas para Mulheres</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Mulheres</h4>
                                            <p>As melhores marcas femininas do mercado!</p>
                                            <div class="main-border-button">
                                                <a href="#women">Descubra Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-01.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Homens</h4>
                                        <span>Melhores Roupas para Homens</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Homens</h4>
                                            <p>O melhor da moda masculina.</p>
                                            <div class="main-border-button">
                                                <a href="#men">Descubra Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-02.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Infantil</h4>
                                        <span>Melhores Roupas para Crianças</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Crianças</h4>
                                            <p>Elas irão amar!</p>
                                            <div class="main-border-button">
                                                <a href="#kids">Descubra Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-03.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Acessórios</h4>
                                        <span>Melhores Acessórios em Tendência</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Acessórios</h4>
                                            <p>Grandes marcas se encontram aqui.</p>
                                            <div class="main-border-button">
                                                <a href="products.php">Descubra Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-04.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Fim da Área do Banner Principal ***** -->

  <!-- ***** Área Masculina Inicia ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Últimos para Homens</h2>

                    <span>Temos os melhores fornecedores.</span>

                    <div class="main-border-buttonF">
                         <a href="masculino.php">Ver coleção completa!</a>
                     </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">

                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/men-01.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Primavera Clássica</h4>
                                <span>$120,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/men-02.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Air Force 1 X</h4>
                                <span>$90,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/men-03.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Love Nana ‘20</h4>
                                <span>$150,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/men-01.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Primavera Clássica</h4>
                                <span>$120,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Área Masculina Final ***** -->

<!-- ***** Área Feminina Inicia ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Últimos para Mulheres</h2>
                    <span>Tudo para moda feminina.</span>

                    <div class="main-border-buttonF">
                         <a href="feminino.php">Ver coleção completa!</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/women-01.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Jaqueta Verde Nova</h4>
                                <span>$75,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/women-02.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Vestido Clássico</h4>
                                <span>$45,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/women-03.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Coleção Primavera</h4>
                                <span>$130,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/women-01.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Primavera Clássica</h4>
                                <span>$120,00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ***** Área Infantil Começa ***** -->
<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Últimos Produtos Infantis</h2>
                    <span>Os detalhes irão encantar as crianças.</span>

                    <div class="main-border-buttonF">
                         <a href="infantil.php">Ver coleção completa!</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/kid-01.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Coleção Escolar</h4>
                                <span>$80.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/kid-02.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Boné de Verão</h4>
                                <span>$12.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/kid-03.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Clássico Infantil</h4>
                                <span>$30.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/kid-01.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Primavera Clássica</h4>
                                <span>$120.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->

    <section class="section" id="explore">

    
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="left-content">
                <h2>Descubra Nossa Coleção</h2>
                <span>Explore a moda contemporânea com nossa seleção exclusiva de roupas e acessórios. Encontre peças únicas que combinam estilo e conforto para todas as ocasiões.</span>
                <div class="quote">
                    <i class="fa fa-quote-left"></i><p>Nossa missão é oferecer moda acessível e de qualidade para todos os estilos.</p>
                </div>
                <p>Em nossa loja online, você encontrará uma variedade de estilos, desde o casual até o elegante, projetados para realçar sua individualidade e confiança.</p>
                <p>Descubra as últimas tendências da temporada e renove seu guarda-roupa com peças que expressam sua personalidade.</p>
                <div class="main-border-button">
                    <a href="products.php">Explore Agora</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="right-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="leather">
                            <h4>Bolsas de Luxo</h4>
                            <span>Estilo e Versatilidade</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="first-image">
                            <img src="assets/images/explore-image-01.jpg" alt="Bolsa de Luxo">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="second-image">
                            <img src="assets/images/explore-image-02.jpg" alt="Bolsa de Luxo">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="types">
                            <h4>Roupas Elegantes</h4>
                            <span>Coleção Primavera-Verão</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
</section>
<!-- ***** Área de Exploração Termina ***** -->

<!-- ***** Área Social Começa ***** -->
<section class="section" id="social">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Mídias Sociais</h2>
                    <span>Detalhe a detalhe é o que faz a Hexashop diferente dos outros temas.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row images">
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Moda</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-01.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Novo</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-02.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Marca</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-03.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Maquiagem</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-04.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Couro</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-05.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Bolsa</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-06.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Área Social Termina ***** -->

    

<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>Assinando Nosso Newsletter Você Pode Obter 30% de Desconto</h2>
                    <span>Detalhe a detalhe é o que faz a Hexashop diferente dos outros temas.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Seu Nome" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Endereço de Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Local da Loja:<br><span>Sem lojas físicas atualmente</span></li>
                            <li>Telefone:<br><span>31-9999-9999020-0340</span></li>
                            <li>Local do Escritório:<br><span>Algum lugar em Betim</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Horário de Funcionamento:<br><span>07:30 AM - 9:30 PM Diariamente</span></li>
                            <li>Email:<br><span>info@empresa.com</span></li>
                            <li>Mídias Sociais:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Área de Assinatura Termina ***** -->

<!-- ***** Rodapé Começa ***** -->
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
<!-- ***** Rodapé Termina ***** -->

    

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