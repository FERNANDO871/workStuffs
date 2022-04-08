<?php 
include "header.php"; 
 ?>
    <!-- Main Header Area End Here -->

        <!-- Begin Video Slider Area -->
        <div class="video-slider_area">

            <div class="home-slider autoplay-video_slider arrow-style">
                <div class="slide-item animation-style-01 bg-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-slide">
                                    <div class="slide-content slide-text_right">
                                        <h2>Everything has beauty, but not everyone sees it</h2>
                                        <div class="slide-btn">
                                            <a class="yena-btn" href="shop-fullwidth.html">Shopping Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-img">
                        <img src="assets/images/slider/slide-img/1-1.png" alt="Slide Image">
                    </div>
                </div>
                <div class="item youtube animation-style-01">
                    <div class="inner-slide">
                        <iframe class="embed-player slide-media" src="https://www.youtube.com/embed/w6qSdlLhBxs?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=QV5EXOFcdrQ&start=1">
                        </iframe>
                        <div class="slide-content video-slide_content">
                            <h2>Natural & Glowing Makeup Look</h2>
                            <div class="slide-btn">
                                <a class="yena-btn" href="shop-fullwidth.html">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Video Slider Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img">
                                <a href="shop-fullwidth.html">
                                    <img class="img-full" src="assets/images/banner/1-1.jpg" alt="Banner Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img">
                                <a href="shop-fullwidth.html">
                                    <img class="img-full" src="assets/images/banner/1-2.jpg" alt="Banner Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Yena's Product Tab Area -->
        <div class="yena-product-tab_area wow fadeInUp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-section_area">
                                    <div class="product-tab">
                                        <ul class="nav product-menu">
                                            <li><a class="active" data-bs-toggle="tab" href="#new-products"><span>Nuevos Productos</span></a></li>
                                            <li><a data-bs-toggle="tab" href="#trending"><span>Populares</span></a></li>
                                            <li><a data-bs-toggle="tab" href="#best-seller"><span>Más Vendidos</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-content yena-tab_content">
                                    <div id="new-products" class="tab-pane active show" role="tabpanel">
                                        <div class="yena-element-carousel product-slider" data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": false,
                                        "dots": false,
                                        "spaceBetween": 30,
                                        "rows" : 2
                                        }' data-slick-responsive='[
                                        {"breakpoint": 1200, "settings": {
                                        "slidesToShow": 3
                                        }},
                                        {"breakpoint": 992, "settings": {
                                        "slidesToShow": 2
                                        }},
                                        {"breakpoint": 576, "settings": {
                                        "slidesToShow": 1
                                        }}
                                    ]'>
<!--  ---------------------------------------      PRODUCTOS ------------------------------------------------- -->


                                           
                                     <?php while ($mostrar_pac=mysqli_fetch_row($return)) {

                                ?>
                                               <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/<?php echo $mostrar_pac[8]; ?>" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/<?php echo $mostrar_pac[9]; ?>" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li>
                                                                    <a  data-bs-toggle="tooltip" data-placement="top" title="Add To cart" onclick="carritoid(<?php echo $mostrar_pac[0]; ?>)" ><i class="lastudioicon-shopping-cart-3"></i></a>



                                                                </li>
                                                                <li class="Yena's-view-btn"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View" onclick="mostrarproducto(<?php echo $mostrar_pac[0]; ?>)"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html"><?php echo $mostrar_pac[4]; ?></a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$20.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } ?>
                                            
                                            
                                            
                                           
                                           

                                        </div>
                                    </div>
                                    <div id="trending" class="tab-pane" role="tabpanel">
                                        <div class="yena-element-carousel product-slider" data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": false,
                                        "dots": false,
                                        "spaceBetween": 30,
                                        "rows" : 2
                                        }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {
                                        "slidesToShow": 3
                                        }},
                                        {"breakpoint":992, "settings": {
                                        "slidesToShow": 2
                                        }},
                                        {"breakpoint":576, "settings": {
                                        "slidesToShow": 1
                                        }}
                                    ]'>

                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/5-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/5-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$49.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/6-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/6-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/7-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/7-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">Rest and Sleep Calming Spray</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/8-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/8-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="old-price">$59.99</span>
                                                                <span class="new-price">$49.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$20.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/2-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/2-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/3-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/3-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">Rest and Sleep Calming Spray</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/4-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/4-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="old-price">$59.99</span>
                                                                <span class="new-price">$49.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="best-seller" class="tab-pane" role="tabpanel">
                                        <div class="yena-element-carousel product-slider" data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": false,
                                        "dots": false,
                                        "spaceBetween": 30,
                                        "rows" : 2
                                        }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {
                                        "slidesToShow": 3
                                        }},
                                        {"breakpoint":992, "settings": {
                                        "slidesToShow": 2
                                        }},
                                        {"breakpoint":576, "settings": {
                                        "slidesToShow": 1
                                        }}
                                    ]'>

                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/7-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/7-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">Rest and Sleep Calming Spray</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/8-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/8-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="old-price">$59.99</span>
                                                                <span class="new-price">$49.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$20.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/2-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/2-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/3-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/3-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">Rest and Sleep Calming Spray</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/4-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/4-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="old-price">$59.99</span>
                                                                <span class="new-price">$49.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/5-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/5-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$49.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/6-1.jpg" alt="Yena's Product Image">
                                                            <img class="secondary-img" src="assets/images/product/medium-size/6-2.jpg" alt="Yena's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="lastudioicon-shopping-cart-3"></i></a>
                                                                </li>
                                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                                        class="lastudioicon-eye"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                        class="bi bi-suit-heart-fill"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="lastudioicon-compare"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price ms-0">$59.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Yena's Product Tab Area End Here -->

        <!-- Begin Banner Area Two -->
        <div class="banner-area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-item">
                            <div class="banner-img">
                                <img class="img-full" src="assets/images/banner/1-3.png" alt="Banner Image">
                            </div>
                            <div class="banner-content wow fadeInUp">
                                <h4 class="intro">Ingredientes naturales que cuidan tu piel</h4>
                                <a class="yena-btn" href="shop-fullwidth.html">Compra aquí</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Two End Here -->

        <!-- Begin Yena's Product Area -->
        <div class="yena-product_area wow fadeInUp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="heading text-uppercase font-style_italic mb-0">Sale this week</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="yena-element-carousel product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": false,
                        "dots": false,
                        "spaceBetween": 30
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                   
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/3-1.jpg" alt="Yena's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/3-2.jpg" alt="Yena's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i class="lastudioicon-shopping-cart-3"></i></a>
                                                </li>
                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                        class="lastudioicon-eye"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="bi bi-suit-heart-fill"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="lastudioicon-compare"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Rest and Sleep Calming Spray</a></h3>
                                            <div class="price-box">
                                                <span class="new-price ms-0">$59.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/4-1.jpg" alt="Yena's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/4-2.jpg" alt="Yena's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i class="lastudioicon-shopping-cart-3"></i></a>
                                                </li>
                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                        class="lastudioicon-eye"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="bi bi-suit-heart-fill"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="lastudioicon-compare"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$59.99</span>
                                                <span class="new-price">$49.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/5-1.jpg" alt="Yena's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/5-2.jpg" alt="Yena's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i class="lastudioicon-shopping-cart-3"></i></a>
                                                </li>
                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                        class="lastudioicon-eye"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="bi bi-suit-heart-fill"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="lastudioicon-compare"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                            <div class="price-box">
                                                <span class="new-price ms-0">$49.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/6-1.jpg" alt="Yena's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/6-2.jpg" alt="Yena's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i class="lastudioicon-shopping-cart-3"></i></a>
                                                </li>
                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                        class="lastudioicon-eye"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="bi bi-suit-heart-fill"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="lastudioicon-compare"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                            <div class="price-box">
                                                <span class="new-price ms-0">$59.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/7-1.jpg" alt="Yena's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/7-2.jpg" alt="Yena's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i class="lastudioicon-shopping-cart-3"></i></a>
                                                </li>
                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                        class="lastudioicon-eye"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="bi bi-suit-heart-fill"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="lastudioicon-compare"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Rest and Sleep Calming Spray</a></h3>
                                            <div class="price-box">
                                                <span class="new-price ms-0">$59.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/8-1.jpg" alt="Yena's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/8-2.jpg" alt="Yena's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart"><i class="lastudioicon-shopping-cart-3"></i></a>
                                                </li>
                                                <li class="Yena's-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Yena's View"><i
                                                        class="lastudioicon-eye"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="bi bi-suit-heart-fill"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="lastudioicon-compare"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">InstaBoost Conditioning Color Masque</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$59.99</span>
                                                <span class="new-price">$49.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Yena's Product Area End Here -->

        <!-- Begin Banner Area Three -->
        <div class="banner-area-3 banner-with_text wow fadeInUp">
            <div class="container-fluid p-0 overflow-hidden">
                <div class="row gx-0">
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-item img-zoom_effect">
                            <div class="banner-img">
                                <a href="shop-fullwidth.html">
                                    <img class="img-full" src="assets/images/banner/1-4.jpg" alt="Banner Image">
                                </a>
                            </div>
                            <div class="banner-content position-bottom_center">
                                <span class="text-uppercase white-text_color">Los mejores correctores de manchas oscuras para cada presupuesto</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-item img-zoom_effect">
                            <div class="banner-img">
                                <a href="shop-fullwidth.html">
                                    <img class="img-full" src="assets/images/banner/1-5.jpg" alt="Banner Image">
                                </a>
                            </div>
                            <div class="banner-content position-bottom_center">
                                <span class="text-uppercase white-text_color">Cómo tratar el acné quístico para una piel más clara</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-item img-zoom_effect">
                            <div class="banner-img">
                                <a href="shop-fullwidth.html">
                                    <img class="img-full" src="assets/images/banner/1-6.jpg" alt="Banner Image">
                                </a>
                            </div>
                            <div class="banner-content position-bottom_center">
                                <span class="text-uppercase white-text_color">Los 18 mejores peelings químicos para una piel más luminosa al instante</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Three End Here -->

        <!-- Begin Brand Area   -->
        <div class="brand-area ptb-70 wow fadeInUp">
            <div class="container-fluid">
                <div class="brand-nav">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="yena-element-carousel brand-slider" data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":575, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>

                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/brand/1.png" alt="Yena's Brand">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/brand/2.png" alt="Yena's Brand">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/brand/3.png" alt="Yena's Brand">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/brand/4.png" alt="Yena's Brand">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/brand/5.png" alt="Yena's Brand">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/brand/6.png" alt="Yena's Brand">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/brand/1.png" alt="Yena's Brand">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Brand Area End Here -->

        <!-- Begin Testimonial Area 
        <div class="testimonial-area testimonial-bg-1 parallax " data-bg="assets/images/testimonial/bg/1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="yena-element-carousel testimonial-slider custom-dots" data-slick-options='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": true,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 1
                                }},
                                {"breakpoint":480, "settings": {
                                "slidesToShow": 1
                            }}
                        ]'>

                            <div class="testimonial-item">
                                <div class="client-info wow fadeInUp">
                                    <p class="feedback font-style_italic">“Well made template with many options to personalize
                                        it to your needs. Customer support prompt and superb as always.”</p>
                                    <div class="img-area">
                                        <img class="img-full" src="assets/images/testimonial/1.png" alt="Yena's Client Image">
                                    </div>
                                    <h6 class="client-name font-style_italic">Elnora Atkins • Indiana</h6>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="client-info wow fadeInUp">
                                    <p class="feedback font-style_italic">“Well made template with many options to personalize
                                        it to your needs. Customer support prompt and superb as always.”</p>
                                    <div class="img-area">
                                        <img class="img-full" src="assets/images/testimonial/2.png" alt="Yena's Client Image">
                                    </div>
                                    <h6 class="client-name font-style_italic">Elnora Atkins • Indiana</h6>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="client-info wow fadeInUp">
                                    <p class="feedback font-style_italic">“Well made template with many options to personalize
                                        it to your needs. Customer support prompt and superb as always.”</p>
                                    <div class="img-area">
                                        <img class="img-full" src="assets/images/testimonial/3.png" alt="Yena's Client Image">
                                    </div>
                                    <h6 class="client-name font-style_italic">Elnora Atkins • Indiana</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial Area End Here -->

        <!-- Begin Banner Area Five -->
        <div class="banner-area-5 banner-bg-1 parallax" data-bg="assets/images/banner/bg/1.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="banner-item h-100">
                            <div class="banner-content h-100 wow fadeInUp">
                                <h2 class="title white-text_color text-uppercase font-style_italic">Secret of beautiful skin</h2>
                                <div class="popup-btn">
                                    <a class="popup-vimeo" href="https://player.vimeo.com/video/172601404?autoplay=1"><i class="dlicon media-1_button-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Five End Here -->

        <!-- Begin Instagram Area -->
        <div class="instagram-area instagram-bg-1 parallax" data-bg="assets/images/instagram/bg/1.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="instagram-col-1 col-12">
                        <div class="instagram-content">
                            <h2 class="heading font-style_italic text-uppercase wow fadeInUp">Yena instagram</h2>
                        </div>
                    </div>
                    <div class="instagram-col-2 col-12">
                        <div class="row instagram-row g-1">
                            <div class="instagram-sub-col">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/instagram/1.jpg" alt="Instagram Image">
                                    </a>
                                    <div class="add-action">
                                        <i class="dlicon ui-3_heart"></i>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instagram-sub-col">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/instagram/2.jpg" alt="Instagram Image">
                                    </a>
                                    <div class="add-action">
                                        <i class="dlicon ui-3_heart"></i>
                                        <span>5</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instagram-sub-col">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/instagram/3.jpg" alt="Instagram Image">
                                    </a>
                                    <div class="add-action">
                                        <i class="dlicon ui-3_heart"></i>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instagram-sub-col">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/instagram/4.jpg" alt="Instagram Image">
                                    </a>
                                    <div class="add-action">
                                        <i class="dlicon ui-3_heart"></i>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instagram-sub-col">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/instagram/5.jpg" alt="Instagram Image">
                                    </a>
                                    <div class="add-action">
                                        <i class="dlicon ui-3_heart"></i>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instagram-sub-col">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="assets/images/instagram/6.jpg" alt="Instagram Image">
                                    </a>
                                    <div class="add-action">
                                        <i class="dlicon ui-3_heart"></i>
                                        <span>3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Area End Here -->

        <!-- Begin Shipping Area -->
        <div class="shipping-area bg-smoke_color wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <div class="elementor-icon icon1 svg-icons"></div>
                            </div>
                            <div class="shipping-content">
                                <h3 class="heading">Free ship over $100</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <div class="elementor-icon icon2 svg-icons"></div>
                            </div>
                            <div class="shipping-content">
                                <h3 class="heading">Support 24/7</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <div class="elementor-icon icon3 svg-icons"></div>
                            </div>
                            <div class="shipping-content">
                                <h3 class="heading">Support 24/7</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <div class="elementor-icon icon4 svg-icons"></div>
                            </div>
                            <div class="shipping-content">
                                <h3 class="heading">Order Protection</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

        <!-- Begin Newsletter Area -->
        <div class="newsletter-area newsletter-bg-1 wow fadeInUp">
            <div class="container">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="newsletter-info">
                                <h2 class="heading text-uppercase font-style_italic">Stay in touch</h2>
                                <p class="short-desc font-style_italic">Subscribe today and keep in touch with everything Yena</p>
                                <div class="newsletter-form_wrap">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Email address" />
                                                <button class="newsletter-btn text-uppercase" id="mc-submit">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Area End Here -->

        <!-- Begin Footer Area -->

<?php include ("footer.php"); ?>