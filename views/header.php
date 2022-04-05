<?php 


if (!isset($_SESSION['id'])) {

$login='<li>
         <a href="login-register.php">Iniciar Sesion / Registro</a>
        </li>';

        $usuario='';
        $tipoc='';
        $Noti='';
        $idUs='';
        $menucuenta="";

}
else{


include "conexion.php"; 

$ipermiso=$_SESSION['tipo'];
$idUs=$_SESSION['id'];

$carrito_user = "SELECT c. id, c. idProd, c. Cantidad, i. NombreProd FROM carrito c 
INNER JOIN inventario i ON c. IdProd = i. id  where c. Estatus = 1 and c. idClt =  $idUs";
$return_carrito=mysqli_query($data,$carrito_user);

$carrito_usercount = "SELECT id FROM carrito  where  Estatus = 1 and  idClt =  $idUs";
$return_carritocount=mysqli_query($data,$carrito_usercount);

$countC = mysqli_num_rows($return_carritocount);



if($countC == 0 )
{
$Noti ='';
}
else
{
$Noti =' <span class="cart-item_count">'.$countC.'</span>';
}



    if ($ipermiso ==1)
{
$tipoc = " <p class='font-italic-bold' style='font-size: 90%'>Cliente</p>";
}
if ($ipermiso ==2)
{
$tipoc = " <p class='font-italic-bold' style='font-size: 90%'>Influencer</p>";
}
if ($ipermiso ==3)
{
$tipoc = " <p class='font-italic-bold' style='font-size: 90%'>Administrador</p>";
}
    if ($ipermiso ==4)
{
$tipoc = " <p class='font-italic-bold' style='font-size: 90%'>Tesoreria</p>";
}
if ($ipermiso ==5)
{
$tipoc = " <p class='font-italic-bold' style='font-size: 90%'>Almacen</p>";
}
if ($ipermiso ==6)
{
$tipoc = " <p class='font-italic-bold' style='font-size: 90%'>Facturacion</p>";
}

$login='<li>
        <a href="cerrarsesion.php">Cerrar Sesion</a>
        </li>';


$nombre= '<strong>' . $_SESSION['Nombre'] . '&nbsp' . $_SESSION['Apellido1'] . '&nbsp' .  $_SESSION['Apellido2'] . '</strong>' ;
$usuario= $nombre ;



$menucuenta='<li><a class="" href="javascript:void(0)">Cuenta <i class="lastudioicon-down-arrow"></i></a>
                                                    <ul class="yena-dropdown">
                                                        <li><a href="my-account.php">Mi Cuenta</a></li>
                                                        <li><a href="Controlusuario.php">Control de Usuario</a></li>
                                                        <li><a href="Cupones.php">Cupones Influencer</a></li>
                                                        <li><a href="Pedidos.php">Pedidos</a></li>
                                                        <li><a href="blog-left-sidebar.html">Envios</a></li>
                                                        <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
                                                        
                                                    </ul>
                                                </li>';



}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title >Ozonium Skin Care & Health</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> 



    <!-- lastudioicon -->
    <link rel="stylesheet" href="assets/css/lastudioicon.min.css">
   <!--  Dlicon Icon -->
    <link rel="stylesheet" href="assets/css/dlicon.min.css"> 
     <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="views/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="assets/css/timecircles.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Light Gallery -->
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

    <!-- link para agregar los estilos de pago para la pagina de pago exitoso (a la que se redirecciona su hubo un pago exitoso) -->
    <link rel="stylesheet" href="views/payment/payment.css">

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area 
        <div class="loading">
            <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
            </div>
        </div>-->
        <!-- Loading Area End Here -->

        <!-- Begin Main Header Area -->
        <header class="main-header_area">
            <div class="main-header position-relative">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 position-static">
                            <div class="main-header_nav row align-items-center">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="header-logo">
                                        <a href="index.php">
                                            <img class="img-full" src="assets/images/logo/1.png" alt="Skin Care & Health">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 position-static d-none d-xl-block">
                                    <div class="main-menu_area d-none d-lg-block">
                                        <nav class="main-nav d-flex justify-content-center">
                                            <ul>
                                                <li class="megamenu-holder two-column position-static" ><a a href="index.php">Inicio</a></li>
                                                
                                                <li class="megamenu-holder megamenu-gallery_holder position-static">
                                                    <a href="javascript:void(0)">Tienda
                                                        <i class="lastudioicon-down-arrow"></i>
                                                    </a>
                                                    <div class="yena-megamenu_wrap">
                                                        <ul class="yena-megamenu">
                                                            <li class="gallery-wrap">
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/1.jpg" alt="Skin Care">
                                                                        </a>
                                                                        <span class="inner-text">Skin care</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/2.jpg" alt="Capilar">
                                                                        </a>
                                                                        <span class="inner-text">Capilar</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="gallery-wrap">
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/3.jpg" alt="Cuidado de la piel Corporal">
                                                                        </a>
                                                                        <span class="inner-text">Corporal</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/4.jpg" alt="Aceite Ozonificado">
                                                                        </a>
                                                                        <span class="inner-text">Aceite Ozonificado</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="gallery-wrap">
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/5.jpg" alt="Cuidado del bebé">
                                                                        </a>
                                                                        <span class="inner-text">Piel de bebé</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/6.jpg" alt="Cuidado oral">
                                                                        </a>
                                                                        <span class="inner-text">Ciudado oral</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="" href="javascript:void(0)">Conócenos <i class="lastudioicon-down-arrow"></i></a>
                                                    <ul class="yena-dropdown">
                                                        <li><a href="about-us.html">Acerca de nosotros</a></li>
                                                        <li><a href="our-services.html">Servicios</a></li>
                                                        <li><a href="blog-grid-basic.html">Blog Grid Basic</a></li>
                                                        <li><a href="faq.html">FAQs</a></li>
                                                        <li><a href="contact-us.html">Contacto</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-holder position-static"><a class="" href="shop-fullwidth.html">Shop <i class="lastudioicon-down-arrow"></i></a>
                                                    <div class="yena-megamenu_wrap">
                                                        <ul class="yena-megamenu yena-megamenu-2">
                                                            <li>
                                                                <span class="megamenu-title">Top Category</span>
                                                                <ul>
                                                                    <li><a href="shop-fullwidth.html">Make Up</a></li>
                                                                    <li><a href="shop-fullwidth.html">Skin Care</a></li>
                                                                    <li><a href="shop-fullwidth.html">Hair Care</a></li>
                                                                    <li><a href="shop-fullwidth.html">Accessories</a></li>
                                                                    <li><a href="shop-fullwidth.html">Beauty</a></li>
                                                                    <li><a href="shop-fullwidth.html">Spa</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="megamenu-title">Shop Layout</span>
                                                                <ul>
                                                                    <li><a href="shop-fullwidth.html">Fullwidth</a></li>
                                                                    <li><a href="shop-sidebar.html">With Sidebar</a></li>
                                                                    <li><a href="shop-masonry.html">Masonry</a></li>
                                                                    <li><a href="shop-2-columns.html">Two Columns</a></li>
                                                                    <li><a href="shop-3-columns.html">Three Columns</a></li>
                                                                    <li><a href="shop-carousel.html">Carousel</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="megamenu-title">Product Layout</span>
                                                                <ul>
                                                                    <li><a href="single-product.html">Standard</a></li>
                                                                    <li><a href="configurable-product.html">Configurable</a></li>
                                                                    <li><a href="grouped-product.html">Grouped</a></li>
                                                                    <li><a href="affiliate-product.html">Affiliate</a></li>
                                                                    <li><a href="countdown-product.html">With Countdown</a></li>
                                                                    <li><a href="custom-style-1.html">Custom Style 01</a></li>
                                                                    <li><a href="custom-style-2.html">Custom Style 02</a></li>
                                                                    <li><a href="custom-style-3.html">Custom Style 03</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="megamenu-title">Shop Pages</span>
                                                                <ul>
                                                                    <li><a href="my-account.html">My Account</a></li>
                                                                    <li><a href="login-register.html">Login | Register</a></li>
                                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                                    <li><a href="checkout.html">Check Out</a></li>
                                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                                    <li><a href="compare.html">Compare</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="" href="javascript:void(0)">Blog <i class="lastudioicon-down-arrow"></i></a>
                                                    <ul class="yena-dropdown">
                                                        <li><a href="blog-grid-basic.html">Blog Grid Basic</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-single-post.html">Single Post</a></li>
                                                    </ul>
                                                </li>
                                                <?php echo $menucuenta ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
<!--    INICIO DE SESION Y BUSCADOR -->

                                 <div class="col-lg-3 col-sm-6">

                                    <div class="header-right_area">
            
            <div class="d-flex-1 d-flex align-items-center pt-1">
                <!--Nombre y puesto de usuario mobile-->
                <div style="line-height: 1;" class="d-flex-1 justify-content-center flex-column text-right">
                    <p class="m-0"><?php echo $usuario; ?></p>
                    <small><?php echo $tipoc ?></small>
                </div>
            </div>
                                        &nbsp
                                        &nbsp
                                        &nbsp
                                        <ul>
                                           
                                            <li>
                                                <a href="#searchBar" class="search-btn toolbar-btn">
                                                    
                                                </a>
                                            </li> 
                                            <li class="minicart-wrap" id="notificador">
                                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                    <div class="minicart-count_area">
                                                        <i class="lastudioicon-bag-20"></i>
                                                        <?php echo $Noti ?>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            <li class="minicart-wrap">
                                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                    <div class="minicart-count_area">
                                                    </div>
                                                </a>
                                            </li>


                                            <li class="mobile-menu_wrap d-inline-block d-xl-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="lastudioicon-menu-4-1"></i>
                                                </a>
                                            </li>

                                            <li class="menu-wrap">
                                                <a href="#offcanvasMenu" class="menu-btn toolbar-btn d-none d-xl-block">
                                                    <div class="minicart-count_area">
                                                        <i class="lastudioicon-menu-4-1"></i>
                                                    </div>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--    MENU RESPONSIVO -->
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header_nav position-relative">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img class="img-full" src="assets/images/logo/1.png" alt="Header Logo">
                                    </a>
                                </div>
                                <div class="main-menu_area d-none d-xl-block">
                                    <nav class="main-nav d-flex justify-content-center">
                                          <ul>
                                                <li class="megamenu-holder two-column position-static" ><a a href="index.php">Inicio</a></li>
                                                
                                                <li class="megamenu-holder megamenu-gallery_holder position-static">
                                                    <a href="javascript:void(0)">Tienda
                                                        <i class="lastudioicon-down-arrow"></i>
                                                    </a>
                                                    <div class="yena-megamenu_wrap">
                                                        <ul class="yena-megamenu">
                                                            <li class="gallery-wrap">
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/1.jpg" alt="Skin Care">
                                                                        </a>
                                                                        <span class="inner-text">Skin care</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/2.jpg" alt="Capilar">
                                                                        </a>
                                                                        <span class="inner-text">Capilar</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="gallery-wrap">
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/3.jpg" alt="Cuidado de la piel Corporal">
                                                                        </a>
                                                                        <span class="inner-text">Corporal</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/4.jpg" alt="Aceite Ozonificado">
                                                                        </a>
                                                                        <span class="inner-text">Aceite Ozonificado</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="gallery-wrap">
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/5.jpg" alt="Cuidado del bebé">
                                                                        </a>
                                                                        <span class="inner-text">Piel de bebé</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <img src="assets/images/menu/6.jpg" alt="Cuidado oral">
                                                                        </a>
                                                                        <span class="inner-text">Ciudado oral</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="" href="javascript:void(0)">Conócenos <i class="lastudioicon-down-arrow"></i></a>
                                                    <ul class="yena-dropdown">
                                                        <li><a href="about-us.html">Acerca de nosotros</a></li>
                                                        <li><a href="our-services.html">Servicios</a></li>
                                                        <li><a href="blog-grid-basic.html">Blog Grid Basic</a></li>
                                                        <li><a href="faq.html">FAQs</a></li>
                                                        <li><a href="contact-us.html">Contacto</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-holder position-static"><a class="" href="shop-fullwidth.html">Shop <i class="lastudioicon-down-arrow"></i></a>
                                                    <div class="yena-megamenu_wrap">
                                                        <ul class="yena-megamenu yena-megamenu-2">
                                                            <li>
                                                                <span class="megamenu-title">Top Category</span>
                                                                <ul>
                                                                    <li><a href="shop-fullwidth.html">Make Up</a></li>
                                                                    <li><a href="shop-fullwidth.html">Skin Care</a></li>
                                                                    <li><a href="shop-fullwidth.html">Hair Care</a></li>
                                                                    <li><a href="shop-fullwidth.html">Accessories</a></li>
                                                                    <li><a href="shop-fullwidth.html">Beauty</a></li>
                                                                    <li><a href="shop-fullwidth.html">Spa</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="megamenu-title">Shop Layout</span>
                                                                <ul>
                                                                    <li><a href="shop-fullwidth.html">Fullwidth</a></li>
                                                                    <li><a href="shop-sidebar.html">With Sidebar</a></li>
                                                                    <li><a href="shop-masonry.html">Masonry</a></li>
                                                                    <li><a href="shop-2-columns.html">Two Columns</a></li>
                                                                    <li><a href="shop-3-columns.html">Three Columns</a></li>
                                                                    <li><a href="shop-carousel.html">Carousel</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="megamenu-title">Product Layout</span>
                                                                <ul>
                                                                    <li><a href="single-product.html">Standard</a></li>
                                                                    <li><a href="configurable-product.html">Configurable</a></li>
                                                                    <li><a href="grouped-product.html">Grouped</a></li>
                                                                    <li><a href="affiliate-product.html">Affiliate</a></li>
                                                                    <li><a href="countdown-product.html">With Countdown</a></li>
                                                                    <li><a href="custom-style-1.html">Custom Style 01</a></li>
                                                                    <li><a href="custom-style-2.html">Custom Style 02</a></li>
                                                                    <li><a href="custom-style-3.html">Custom Style 03</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="megamenu-title">Shop Pages</span>
                                                                <ul>
                                                                    <li><a href="my-account.html">My Account</a></li>
                                                                    <li><a href="login-register.html">Login | Register</a></li>
                                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                                    <li><a href="checkout.html">Check Out</a></li>
                                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                                    <li><a href="compare.html">Compare</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="" href="javascript:void(0)">Blog <i class="lastudioicon-down-arrow"></i></a>
                                                    <ul class="yena-dropdown">
                                                        <li><a href="blog-grid-basic.html">Blog Grid Basic</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-single-post.html">Single Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    </nav>
                                </div>
                                <div class="header-right_area">

                                    <div class="d-flex-1 d-flex align-items-center pt-1">
                <!--Nombre y puesto de usuario mobile-->
                <div style="line-height: 1;" class="d-flex-1 justify-content-center flex-column text-right">
                    <p class="m-0"><?php echo $usuario; ?></p>
                    <small><?php echo $tipoc ?></small>
                </div>
            </div>
                                        &nbsp
                                        &nbsp
                                        &nbsp


                                    <ul>

                                            
                                            <li>
                                                <a href="#searchBar" class="search-btn toolbar-btn">
                                                   
                                                </a>
                                            </li>
                                            <li class="minicart-wrap">
                                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                    <div class="minicart-count_area">
                                                        <i class="lastudioicon-bag-20"></i>
                                                        <?php echo $Noti ?>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            <li class="minicart-wrap">
                                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                    <div class="minicart-count_area">
                                                    </div>
                                                </a>
                                            </li>


                                            <li class="mobile-menu_wrap d-inline-block d-xl-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="lastudioicon-menu-4-1"></i>
                                                </a>
                                            </li>

                                            <li class="menu-wrap">
                                                <a href="#offcanvasMenu" class="menu-btn toolbar-btn d-none d-xl-block">
                                                    <div class="minicart-count_area">
                                                        <i class="lastudioicon-menu-4-1"></i>
                                                    </div>
                                                </a>
                                            </li>


                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--MINI CARRITO -->
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="lastudioicon-e-remove"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Carrito</h4>
                        </div>
                        <ul class="minicart-list">


                            <?php
                            if (!isset($_SESSION['id'])) {

                            }
                            else {
                             while ($mostrar_pc=mysqli_fetch_row($return_carrito)) {

                                ?>
                            <li class="minicart-product">
                               <!-- <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="lastudioicon-e-remove"></i></a> -->
                                <div class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1.jpg" alt="Yena's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-fullwidth.html"><?php echo $mostrar_pc[3]; ?></a>
                                    <span class="product-item_quantity"><?php echo $mostrar_pc[2]; ?> x $20.00</span>
                                </div>
                            </li>
                           <?php } 
                       }?>
                           
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$60.00</span>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="cart.php?id=<?php echo $idUs; ?>" class="yena-btn yena-btn_fullwidth square-btn">Minicart</a>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="checkout.php" class="yena-btn yena-btn_fullwidth square-btn">Checkout</a>
                    </div>
                </div>
            </div>
<!-- fin carrito -->





            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close-2"><i class="lastudioicon-e-remove"></i></a>
                    <nav class="offcanvas-navigation">
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children active"><a href="#"><span
                                    class="mm-text">Home <i class="lastudioicon-down-arrow"></i></span></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index.html">
                                            <span class="mm-text">Home 01</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">
                                            <span class="mm-text">Home 02</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-3.html">
                                            <span class="mm-text">Home 03</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-4.html">
                                            <span class="mm-text">Home 04</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-5.html">
                                            <span class="mm-text">Home 05</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-6.html">
                                            <span class="mm-text">Home 06</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-7.html">
                                            <span class="mm-text">Home 07</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-8.html">
                                            <span class="mm-text">Home 08</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Pages <i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="about-us.html">
                                            <span class="mm-text">About Us</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="our-services.html">
                                            <span class="mm-text">Our Services</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            <span class="mm-text">FAQs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">
                                            <span class="mm-text">Contact Us</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="coming-soon.html">
                                            <span class="mm-text">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error-404.html">
                                            <span class="mm-text">Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Collection <i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="shop-fullwidth.html">
                                            <span class="mm-text">Collection Mega</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Shop <i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Top Category <i class="lastudioicon-down-arrow"></i></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">Make Up</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">Skin Care</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">Hair Care</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">Accessories</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">Beauty</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">Spa</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop Layout <i class="lastudioicon-down-arrow"></i></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">Fullwidth</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="mm-text">With Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-masonry.html">
                                                    <span class="mm-text">Masonry</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-2-columns.html">
                                                    <span class="mm-text">Two Columns</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-2-columns.html">
                                                    <span class="mm-text">Three Columns</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-carousel.html">
                                                    <span class="mm-text">Carousel</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Product Layout <i class="lastudioicon-down-arrow"></i></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="single-product.html">
                                                    <span class="mm-text">Standard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="configurable-product.html">
                                                    <span class="mm-text">Configurable</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="grouped-product.html">
                                                    <span class="mm-text">Grouped</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="affiliate-product.html">
                                                    <span class="mm-text">Affiliate</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="countdown-product.html">
                                                    <span class="mm-text">With Countdown</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="custom-style-1.html">
                                                    <span class="mm-text">Custom Style 01</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="custom-style-2.html">
                                                    <span class="mm-text">Custom Style 02</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="custom-style-3.html">
                                                    <span class="mm-text">Custom Style 03</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop Pages <i class="lastudioicon-down-arrow"></i></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="my-account.html">
                                                    <span class="mm-text">My Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login-register.html">
                                                    <span class="mm-text">Login | Register</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="mm-text">Shopping Cart</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">
                                                    <span class="mm-text">Check Out</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <span class="mm-text">Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <span class="mm-text">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Blog <i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children has-children">
                                        <a href="blog-grid-basic.html">
                                            <span class="mm-text">Blog Grid Basic</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children has-children">
                                        <a href="blog-right-sidebar.html">
                                            <span class="mm-text">Blog Right Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children has-children">
                                        <a href="blog-no-sidebar.html">
                                            <span class="mm-text">Blog No Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children has-children">
                                        <a href="blog-left-sidebar.html">
                                            <span class="mm-text">Blog Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children has-children">
                                        <a href="blog-single-post.html">
                                            <span class="mm-text">Single Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <nav class="offcanvas-navigation user-setting_area">
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children active">
                                <a href="#">
                                    <span class="mm-text">User Setting 
                                    <i class="lastudioicon-down-arrow"></i>
                                </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="my-account.html">
                                            <span class="mm-text">My Account</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login-register.html">
                                            <span class="mm-text">Login | Register</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Currency 
                                    <i class="lastudioicon-down-arrow"></i>
                                </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="mm-text">EUR €</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="mm-text">USD $</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Language 
                                    <i class="lastudioicon-down-arrow"></i>
                                </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="mm-text">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="mm-text">Français</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="mm-text">Romanian</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="mm-text">Japanese</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
<!--MENU DE AYUDA-->
            <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="lastudioicon-e-remove"></i></a>
                    <div class="offcanvas-inner_nav">
                        <ul>
                            
                            <li>
                                <a href="javascript:void(0)">About Yena</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Help Center</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Store</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Blog</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">New Look</a>
                            </li>
                            
                           <?php echo $login; ?>
                        </ul>
                    </div>
                    <div class="offcanvas-inner_banner">
                        <div class="inner-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/menu/offcanvas/1.jpg" alt="Offcanvas Inner Banner">
                            </a>
                        </div>
                    </div>
                    <div class="offcanvas-inner_info">
                        <span>(+612) 2531 5600</span>
                        <span>info@example.com</span>
                        <span>PO Box 1622 Colins Street West Victoria 8077 Australia</span>
                        <div class="social-link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="lastudioicon-b-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="lastudioicon-b-twitter"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://www.instagram.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://vimeo.com/" data-bs-toggle="tooltip" target="_blank" title="Vimeo">
                                        <i class="lastudioicon-b-vimeo"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="payment">
                            <img src="assets/images/payment/1.png" alt="Yena's Payment Method">
                        </div>
                        <div class="copyright">
                            <span>&copy; 2021
                            <a href="index.html">Yena.</a>
                            <a href="https://hasthemes.com/" target="_blank">Designed By HasTech.</a>
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="offcanvas-menu-inner">
                    <div class="container h-100">
                        <a href="#" class="btn-close"><i class="lastudioicon-e-remove"></i></a>
                        <!-- Begin Offcanvas Search Area -->
                        <div class="offcanvas-search">
                            <span class="searchbox-info">Start typing and press Enter to search</span>
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Search">
                                <button class="search_btn" type="submit"><i class="lastudioicon-zoom-1"></i></button>
                            </form>
                        </div>
                        <!-- Offcanvas Search Area End Here -->
                    </div>
                </div>
            </div>


            <div class="global-overlay"></div>
        </header>

        <!-- Main Header Area End Here -->