<?php
include "lib/config.php";

include "templates/header.php";
?>
<header class="header">
    <div class="header__logo">
        <img src="./resources/logo.png" alt="Neoshop" title="Neoshop" />
    </div><!-- .header__logo -->
    <div class="header__shop shop">
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-shopping-cart"></i></i></span>
            <span class="shop__text">Carrito</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-user"></i></span>
            <span class="shop__text">Mi perfil</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-box-open"></i></i></span>
            <span class="shop__text">Mis pedidos</span>
        </a><!-- .shop__button -->
    </div><!-- .header__shop -->
</header>
<div class="wrapper">

    <div class="slider">
        <!-- TODO: Desarrollar el marcado para el slider -->
        <ul class="slides">
            <li class="mySlides"><img src="./resources/slider/slide1.jpg" alt="slide1" /></li>
            <li class="mySlides"><img src="./resources/slider/slide2.jpg" alt="slide2" /></li>
            <li class="mySlides"><img src="./resources/slider/slide3.jpg" alt="slide3" /></li>
            <li class="mySlides"><img src="./resources/slider/slide4.jpg" alt="slide4" /></li>
        </ul>
    <div class="buttons">
        <div class="next">&#10095;</div>
        <div class="prev">&#10094;</div>
    </div>

    </div><!-- .slider -->

    <h1>PRODUCTOS</h1>
    <div class="products">
        <!-- TODO: Desarrollar el marcado para los productos -->

        <div class="item1">
            <img alt="OLD SKOOL 36 DX" src="./resources/products/vans1.png">
                <div class="info">
                    <p class="name">OLD SKOOL 36 DX</p>
                    <p class="price">85,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>
        <div class="item2">
            <img alt="COMFYCUSH OLD SKOOL" src="./resources/products/vans2.png">
                <div class="info">
                    <p class="name">COMFYCUSH OLD <br> SKOOL</p>
                    <p class="price">75,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>
        <div class="item3">
            <img alt="OLD SKOOL DE ANTE Y LONA" src="./resources/products/vans3.png">
                <div class="info">
                    <p class="name">OLD SKOOL DE ANTE <br> Y LONA</p>
                    <p class="price">60,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>
        <div class="item4">
            <img alt="OLD SKOOL DE ANTE SUAVE" src="./resources/products/vans4.png">
                <div class="info">
                    <p class="name">OLD SKOOL DE ANTE <br> SUAVE</p>
                    <p class="price">65,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>
        <div class="item5">
            <img alt="cta1" src="./resources/cta/cta1.jpg">
        </div>
        <div class="item6">
            <img alt="OLD SKOOL PRO" src="./resources/products/vans5.png">
                <div class="info">
                    <p class="name">OLD SKOOL PRO</p>
                    <p class="price">95,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>
        <div class="item7">
            <img alt="ANTI HERO OLD SKOOL PRO" src="./resources/products/vans6.png">
                <div class="info">
                    <p class="name">ANTI HERO OLD <br> SKOOL PRO</p>
                    <p class="price">95,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>
        <div class="item8">
            <img alt="ERA PRIMARY CHECK" src="./resources/products/vans7.png">
                <div class="info">
                    <p class="name">ERA PRIMARY CHECK</p>
                    <p class="price">95,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>
        <div class="item9">
            <img alt="cta2" src="./resources/cta/cta2.jpg">
        </div>
        <div class="item10">
            <img alt="STYLE 36" src="./resources/products/vans8.png">
                <div class="info">
                    <p class="name">STYLE 36</p>
                    <p class="price">80,00€</p>
                </div>
                <button class="button">COMPRAR</button>
        </div>



    </div><!-- .products -->
    
    
    <div class="load">
        <!-- TODO: BONUS. Desarrollar la funcionalidad para que el botón cargue más productos -->
        <span class="load__button button">Cargar más productos</span>
    </div><!-- .load -->
</div><!-- .wrapper -->
<footer class="footer">
    <p><img src="./resources/logo.png" alt="Neoshop" title="Neoshop" /></p>
    <p>Prueba técnica para candidatos</p>
</footer>
<?php
include "templates/footer.php";
