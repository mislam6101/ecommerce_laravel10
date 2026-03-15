@extends('frontend.app')

@section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="M_Adnan">
        <title>BoShop - Multipurpose eCommerce HTML5 Template</title>

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{url('')}}/rs-plugin/css/settings.css" media="screen" />

        <!-- Bootstrap Core CSS -->
        <link href="{{url('')}}/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('')}}/css/ionicons.min.css" rel="stylesheet">
        <link href="{{url('')}}/css/main.css" rel="stylesheet">
        <link href="{{url('')}}/css/style.css" rel="stylesheet">
        <link href="{{url('')}}/css/responsive.css" rel="stylesheet">
        <link href="{{url('')}}/font/flaticon.css" rel="stylesheet">

        <!-- JavaScripts -->
        <script src="{{url('')}}/js/modernizr.js"></script>

        <!-- Online Fonts -->
        <link
            href="{{url('')}}/https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800"
            rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="{{url('')}}/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="{{url('')}}/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>
@endsection

<!-- header -->

@section('content')
    <!-- HOME MAIN  -->
    <section class="home-slide simple-head" data-stellar-background-ratio="0.5">
        <div class="container">
            <!-- Item Slider -->
            <div class="single-slide">

                <!-- Slider Content -->
                <div class="owl-slide">
                    <!-- Header Text -->
                    <div class="text-left col-md-11 no-padding"> <span class="price"><small>$</small>299.99</span>
                        <h4>The Latest Winter Product for 2018</h4>
                        <h1 class="extra-huge-text">look hot with 2018 style</h1>
                        <div class="text-btn"> <a href="{{url('')}}/#." class="btn btn-inverse margin-top-40">SHOP NOW</a> </div>
                    </div>
                </div>

                <!-- Slider Content -->
                <div class="owl-slide">
                    <!-- Header Text -->
                    <div class="text-left col-md-11 no-padding"> <span class="price"><small>$</small>299.99</span>
                        <h4>The Huge Summer Shop for 2018</h4>
                        <h1 class="extra-huge-text">Perfect 2018 Fashion Style</h1>
                        <div class="text-btn"> <a href="{{url('')}}/#." class="btn btn-inverse margin-top-40">SHOP NOW</a> </div>
                    </div>
                </div>

                <!-- Slider Content -->
                <div class="owl-slide">
                    <!-- Header Text -->
                    <div class="text-left col-md-11 no-padding"> <span class="price"><small>$</small>299.99</span>
                        <h4>Summer/Winter for 2018</h4>
                        <h1 class="extra-huge-text">All of the Best Collections </h1>
                        <div class="text-btn"> <a href="{{url('')}}/#." class="btn btn-inverse margin-top-40">SHOP NOW</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- Shop By Items -->
        <section class="padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- About Sec -->
                <div class="acces-ser">
                    <!-- Heading -->
                    <div class="row">

                        <!-- Bags -->
                        <div class="col-sm-4">
                            <article> <img class="img-responsive" src="{{url('')}}/images/access-img-1.jpg" alt="">
                                <h6>Shoes</h6>
                                <a href="{{url('')}}/#." class="btn by">Shop NOW</a>
                            </article>
                        </div>

                        <!-- Women -->
                        <div class="col-sm-4">
                            <article> <img class="img-responsive" src="{{url('')}}/images/access-img-3.jpg" alt="">
                                <h6>Women</h6>
                                <a href="{{url('')}}/#." class="btn by">Shop NOW</a>
                            </article>
                        </div>

                        <!-- Bags -->
                        <div class="col-sm-4">
                            <article> <img class="img-responsive" src="{{url('')}}/images/access-img-2.jpg" alt="">
                                <h6>Bags</h6>
                                <a href="{{url('')}}/#." class="btn by">Shop NOW</a>
                            </article>
                        </div>

                        <!-- Fashion -->
                        <div class="col-sm-4">
                            <article> <img class="img-responsive" src="{{url('')}}/images/access-img-5.jpg" alt="">
                                <h6>Fashion</h6>
                                <a href="{{url('')}}/#." class="btn by">Shop NOW</a>
                            </article>
                        </div>

                        <!-- Bags -->
                        <div class="col-sm-4">
                            <article> <img class="img-responsive" src="{{url('')}}/images/access-img-4.jpg" alt="">
                                <h6>Accessories</h6>
                                <a href="{{url('')}}/#." class="btn by">Shop NOW</a>
                            </article>
                        </div>

                        <!-- Fashion -->
                        <div class="col-sm-4">
                            <article> <img class="img-responsive" src="{{url('')}}/images/access-img-6.jpg" alt=""> <a
                                    href="{{url('')}}/#." class="btn by">Shop NOW</a> </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Intro Section -->
        <section class="light-gray-bg padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="intro-sec">
                    <div class="center-block">
                        <h3>We are building high quality products from the latest fashion. we are providing fully
                            customization cloth for Mens, Women and Kids . we have full verity of <br>
                            <small><span> <b>01</b>: Shirts </span><span><b>02</b>: T-shirt </span><span><b>03</b>: Jean
                                </span><span><b>04</b>: Uppers </span><span><b>05</b>: Hoodies </span><span><b>06</b>: Polo
                                    Shirts </span><span><b>07</b>: Caps & Many More </span></small>
                        </h3>
                        <a href="{{url('')}}/#." class="btn btn-inverse margin-right-20">For Customization</a> <a href="{{url('')}}/#."
                            class="btn">Order Now </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Arrival -->
        <section class="padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>Best New Collection 2018/2019</h4>
                    <hr>
                </div>

                <!-- Categories List -->
                <div class="cate-list">
                    <ul>
                        <li><a href="{{url('')}}/#.">MEN</a></li>
                        <li><a href="{{url('')}}/#.">WOMEN</a></li>
                        <li><a href="{{url('')}}/#.">KIDS</a></li>
                        <li class="active"><a href="{{url('')}}/#.">ACCESSORIES</a></li>
                        <li><a href="{{url('')}}/#.">CATEGORIES</a></li>
                        <li><a href="{{url('')}}/#.">GIFTS</a></li>
                    </ul>
                </div>

                <!-- New Arrival -->
                <div class="arrival-block item-col-3 with-spaces">
                    <div class="item">
                        <div class="img-ser">
                            <!-- Images -->
                            <img class="img-1" src="{{url('')}}/images/item-img-1-1.jpg" alt=""> <img class="img-2"
                                src="{{url('')}}/images/item-img-1-1-1.jpg" alt="">
                            <!-- Overlay  -->
                            <div class="overlay">
                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                        href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i> Add To
                                        Cart</a></div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">The Child Special T-Shirts</a> <span
                                class="price"><small>$</small><span class="line-through">299.00</span>
                                <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="{{url('')}}/#.">View
                                Detail</a> </div>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <div class="img-ser">
                            <!-- Images -->
                            <img class="img-1" src="{{url('')}}/images/item-img-1-2.jpg" alt=""> <img class="img-2"
                                src="{{url('')}}/images/item-img-1-2-1.jpg" alt="">
                            <!-- Overlay  -->
                            <div class="overlay">
                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                        href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i> Add To
                                        Cart</a></div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">Lather Bags Inside and outside</a>
                            <span class="price"><small>$</small><span class="line-through">299.00</span>
                                <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="{{url('')}}/#.">View
                                Detail</a>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <div class="img-ser">
                            <!-- Images -->
                            <img class="img-1" src="{{url('')}}/images/item-img-1-3.jpg" alt=""> <img class="img-2"
                                src="{{url('')}}/images/item-img-1-3-1.jpg" alt="">
                            <!-- Overlay  -->
                            <div class="overlay">
                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                        href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i> Add To
                                        Cart</a></div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">Neck Skaff Full </a> <span
                                class="price"><small>$</small><span class="line-through">299.00</span>
                                <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="{{url('')}}/#.">View
                                Detail</a> </div>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <div class="img-ser">
                            <!-- Images -->
                            <img class="img-1" src="{{url('')}}/images/item-img-1-4.jpg" alt=""> <img class="img-2"
                                src="{{url('')}}/images/item-img-1-4-1.jpg" alt="">
                            <!-- Overlay  -->
                            <div class="overlay">
                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                        href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i> Add To
                                        Cart</a></div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">Angry T-shites</a> <span
                                class="price"> <small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                href="{{url('')}}/#.">View Detail</a> </div>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <div class="img-ser">
                            <!-- Images -->
                            <img class="img-1" src="{{url('')}}/images/item-img-1-5.jpg" alt=""> <img class="img-2"
                                src="{{url('')}}/images/item-img-1-5-1.jpg" alt="">
                            <!-- Overlay  -->
                            <div class="overlay">
                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                        href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i> Add To
                                        Cart</a></div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">Child Dressing Shorts Jeans</a> <span
                                class="price"> <small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                href="{{url('')}}/#.">View Detail</a> </div>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <div class="img-ser">
                            <!-- Images -->
                            <img class="img-1" src="{{url('')}}/images/item-img-1-6.jpg" alt=""> <img class="img-2"
                                src="{{url('')}}/images/item-img-1-6-1.jpg" alt="">
                            <!-- Overlay  -->
                            <div class="overlay">
                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                        href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i> Add To
                                        Cart</a></div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">The Best Hand Back Small</a> <span
                                class="price"> <small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                href="{{url('')}}/#.">View Detail</a> </div>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <div class="img-ser">
                            <!-- Images -->
                            <img class="img-1" src="{{url('')}}/images/item-img-1-7.jpg" alt=""> <img class="img-2"
                                src="{{url('')}}/images/item-img-1-7-1.jpg" alt="">
                            <!-- Overlay  -->
                            <div class="overlay">
                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                        href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i> Add To
                                        Cart</a></div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">Child White Skinny Jeans</a> <span
                                class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                href="{{url('')}}/#.">View Detail</a> </div>
                    </div>

                    <!-- Papular Items -->
                    <div class="tab-pane animated fadeInDown" id="pap" role="tabpanel">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1" src="{{url('')}}/images/item-img-1-8.jpg" alt=""> <img class="img-2"
                                    src="{{url('')}}/images/item-img-1-8-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"> <a class="popup-with-move-anim"
                                            href="{{url('')}}/#qck-view-shop">Quick View</a> <a href="{{url('')}}/#."><i
                                                class="icon-magnifier"></i></a> </div>
                                    <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i>
                                            Add To Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small>299.00</span> </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1" src="{{url('')}}/images/item-img-1-9.jpg" alt=""> <img class="img-2"
                                    src="{{url('')}}/images/item-img-1-9-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"> <a class="popup-with-move-anim"
                                            href="{{url('')}}/#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                    <div class="add-crt"><a href="{{url('')}}/#."><i class="icon-basket margin-right-10"></i>
                                            Add To Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"> <a href="{{url('')}}/#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span>
                                    <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="{{url('')}}/#.">View
                                    Detail</a> </div>
                        </div>
                    </div>
                </div>

                <!-- View All Items -->
                <div class="text-center margin-top-30"> <a href="{{url('')}}/#." class="btn margin-right-20">View ALl Shop
                        Items</a> </div>
            </div>

            <!-- Quick View -->
            <div id="qck-view-shop" class="zoom-anim-dialog qck-inside mfp-hide">
                <div class="row">
                    <div class="col-md-6">

                        <!-- Images Slider -->
                        <div class="images-slider">
                            <ul class="slides">
                                <li data-thumb="images/item-img-1-1.jpg"> <img src="{{url('')}}/images/item-img-1-1.jpg"
                                        alt=""> </li>
                                <li data-thumb="images/item-img-1-1-1.jpg"> <img src="{{url('')}}/images/item-img-1-1-1.jpg"
                                        alt=""> </li>
                                <li data-thumb="images/item-img-1-1.jpg"> <img src="{{url('')}}/images/item-img-1-1.jpg"
                                        alt=""> </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Content Info -->
                    <div class="col-md-6">
                        <div class="contnt-info">
                            <h3>Mid Rise Skinny Jeans</h3>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate
                                the look and feel of finished, typeset text. Only for show. He who searches for meaning here
                                will be sorely disappointed. <br>
                                <br>
                                These words are here to provide the reader with a basic impression of how actual text will
                                appear in its final presentation.
                            </p>

                            <!-- Btn  -->
                            <div class="add-info">
                                <div class="quantity">
                                    <input type="number" min="1" max="100" step="1" value="1"
                                        class="form-control qty">
                                </div>
                                <a href="{{url('')}}/#." class="btn btn-inverse"><i class="icon-heart"></i></a> <a
                                    href="{{url('')}}/#." class="btn">ADD TO CART </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Products -->
        <section class="light-gray-bg padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>Popular Products</h4>
                    <hr>
                </div>

                <!-- Popular Item Slide -->
                <div class="papular-block block-slide-con">
                    <!-- Item -->
                    <div class="item">
                        <!-- Sale -->
                        <div class="on-sale"> Sale </div>
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-1.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-1-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-1.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small><span class="line-through">299.00</span>
                            <small>$</small>199.00</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-2.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-2-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-2.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">

                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-3.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-3-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-3.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-4.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-4-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-4.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">

                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-5.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-5-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-3.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">

                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-6.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-6-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-4.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">

                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-7.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-7-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-3.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">

                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{url('')}}/images/item-img-1-8.jpg" alt=""> <img
                                class="img-2" src="{{url('')}}/images/item-img-1-8-1.jpg" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{url('')}}/images/product-4.jpg" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="{{url('')}}/#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{url('')}}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{url('')}}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="small-about">
            <div class="container-full">
                <div class="news-letter padding-top-150 padding-bottom-150">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>We always stay with our clients and respect their business. We deliver 100% and provide
                                instant response to help them succeed in constantly changing and challenging business world.
                            </h3>
                            <ul class="social_icons">
                                <li><a href="{{url('')}}/#."><i class="icon-social-facebook"></i></a></li>
                                <li><a href="{{url('')}}/#."><i class="icon-social-twitter"></i></a></li>
                                <li><a href="{{url('')}}/#."><i class="icon-social-tumblr"></i></a></li>
                                <li><a href="{{url('')}}/#."><i class="icon-social-youtube"></i></a></li>
                                <li><a href="{{url('')}}/#."><i class="icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h3>Subscribe Our Newsletter</h3>
                            <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac.</span>
                            <form>
                                <input type="email" placeholder="Enter your email address" required>
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Knowledge Share -->
        <section class="light-gray-bg padding-top-100 padding-bottom-100">
            <div class="container-full">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>Knowledge Share</h4>
                    <hr>
                </div>
                <div class="knowledge-share">
                    <ul class="row">
                        <!-- Post 1 -->
                        <li class="col">

                            <!-- Post Img -->
                            <div class="img-por"> <img src="{{url('')}}/images/history-img.jpg" alt=""></div>
                            <article>
                                <!-- Date And comment -->
                                <div class="date"> <span class="huge">10</span> <span>January</span></div>
                                <div class="com-sec"> <span>By: <strong><a href="{{url('')}}/#.">Admin</a></strong></span>
                                    <span>Comments: <strong><a href="{{url('')}}/#.">32</a></strong></span>
                                </div>
                                <div class="clearfix"></div>
                                <a href="{{url('')}}/#." class="b-tittle">Donec commo is vulputate</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                                    tellus vel tristique posuere, <a href="{{url('')}}/#.">Read more</a></p>
                            </article>
                        </li>

                        <!-- Post 2 -->
                        <li class="col">

                            <!-- Post Img -->
                            <div class="img-por"> <img src="{{url('')}}/images/about-img.jpg" alt=""></div>
                            <article>
                                <!-- Date And comment -->
                                <div class="date"> <span class="huge">25</span> <span>February</span></div>
                                <div class="com-sec"> <span>By: <strong><a href="{{url('')}}/#.">Admin</a></strong></span>
                                    <span>Comments: <strong><a href="{{url('')}}/#.">32</a></strong></span>
                                </div>
                                <div class="clearfix"></div>
                                <a href="{{url('')}}/#." class="b-tittle">Donec commo is vulputate</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus. Sed
                                    feugiat, tellus vel tristique posuere, <a href="{{url('')}}/#.">Read more</a></p>
                            </article>
                        </li>

                        <!-- Post 2 -->
                        <li class="col">
                            <!-- Post Img -->
                            <div class="img-por"> <img src="{{url('')}}/images/custom-img.jpg" alt=""></div>
                            <article>
                                <!-- Date And comment -->
                                <div class="date"> <span class="huge">25</span> <span>February</span></div>
                                <div class="com-sec"> <span>By: <strong><a href="{{url('')}}/#.">Admin</a></strong></span>
                                    <span>Comments: <strong><a href="{{url('')}}/#.">32</a></strong></span>
                                </div>
                                <div class="clearfix"></div>
                                <a href="{{url('')}}/#." class="b-tittle">Donec commo is vulputate</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                                    Sed feugiat, tellus vel tristique posuere, <a href="{{url('')}}/#.">Read more</a></p>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="testimonial padding-top-60 padding-bottom-80">
            <div class="container"> <i class="fa fa-quote-left"></i>

                <!-- Slide -->
                <div class="single-slide">

                    <!-- Slide -->
                    <div class="testi-in">
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                            faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum
                            consectetur,</p>
                        <h5>John Smith</h5>
                        <span>Themeforest</span>
                    </div>

                    <!-- Slide -->
                    <div class="testi-in">
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                            faucibus. Sed lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur,
                        </p>
                        <h5>John Smith</h5>
                        <span>Themeforest</span>
                    </div>

                    <!-- Slide -->
                    <div class="testi-in">
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum. Sed ullamcorper
                            sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, </p>
                        <h5>John Smith</h5>
                        <span>Themeforest</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->
        <section class="clients light-gray-bg padding-top-60 padding-bottom-80">
            <div class="container-full">
                <div class="clients-slide">
                    <div> <img src="{{url('')}}/images/c-mg-1.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-2.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-3.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-1.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-2.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-3.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-1.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-2.png" alt=""> </div>
                    <div> <img src="{{url('')}}/images/c-mg-3.png" alt=""> </div>
                </div>
            </div>
        </section>
    </div>
@endsection
<!-- FOOTER -->
@section('footer')
    <footer>
        <div class="container-full">
            <div class="insta-g">
                <div class="position-center-center">
                    <h3>From The @instgram</h3>
                </div>
                <ul>
                    <li><img src="{{url('')}}/images/insta-post-1.jpg" alt=""></li>
                    <li><img src="{{url('')}}/images/insta-post-2.jpg" alt=""></li>
                    <li><img src="{{url('')}}/images/insta-post-6.jpg" alt=""></li>
                    <li><img src="{{url('')}}/images/insta-post-4.jpg" alt=""></li>
                    <li><img src="{{url('')}}/images/insta-post-5.jpg" alt=""></li>
                    <li><img src="{{url('')}}/images/insta-post-3.jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT Location -->
                <div class="col-md-4">
                    <div class="about-footer"> <img class="margin-bottom-30" src="{{url('')}}/images/logo-foot.png" alt="">
                        <p><i class="icon-pointer"></i> Street No. 12, Newyork 12, <br>
                            MD - 123, USA.</p>
                        <p><i class="icon-call-end"></i> 1.800.123.456789 <br>
                            1.800.123.456789</p>
                        <p><i class="icon-envelope"></i> info@BoShop.com <br>
                            contact@BoShop.com</p>
                    </div>
                </div>

                <!-- HELPFUL LINKS -->
                <div class="col-md-5">
                    <h6>Links</h6>
                    <ul class="link two-half">
                        <li><a href="{{url('')}}/#."> Products</a></li>
                        <li><a href="{{url('')}}/#."> Find a Store</a></li>
                        <li><a href="{{url('')}}/#."> Features</a></li>
                        <li><a href="{{url('')}}/#."> Privacy Policy</a></li>
                        <li><a href="{{url('')}}/#."> Blog</a></li>
                        <li><a href="{{url('')}}/#."> Press Kit </a></li>
                        <li><a href="{{url('')}}/#."> Products</a></li>
                        <li><a href="{{url('')}}/#."> Find a Store</a></li>
                        <li><a href="{{url('')}}/#."> Features</a></li>
                        <li><a href="{{url('')}}/#."> Privacy Policy</a></li>
                        <li><a href="{{url('')}}/#."> Blog</a></li>
                        <li><a href="{{url('')}}/#."> Press Kit </a></li>
                    </ul>
                </div>

                <!-- HELPFUL LINKS -->
                <div class="col-md-3">
                    <h6>Account Info</h6>
                    <ul class="link">
                        <li><a href="{{url('')}}/#."> Products</a></li>
                        <li><a href="{{url('')}}/#."> Find a Store</a></li>
                        <li><a href="{{url('')}}/#."> Features</a></li>
                        <li><a href="{{url('')}}/#."> Privacy Policy</a></li>
                        <li><a href="{{url('')}}/#."> Blog</a></li>
                        <li><a href="{{url('')}}/#."> Press Kit </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Rights -->
        <div class="rights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>© 2018 BoShop All right reserved. <a href="{{url('')}}/https://webicode.com/">webicode</a></p>
                    </div>
                    <div class="col-md-6 text-right"> <img src="{{url('')}}/images/card-icon.png" alt=""> </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

{{-- scripts --}}
@section('scripts')
    <script src="{{url('')}}/js/jquery-1.12.4.min.js"></script>
    <script src="{{url('')}}/js/popper.min.js"></script>
    <script src="{{url('')}}/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/js/own-menu.js"></script>
    <script src="{{url('')}}/js/jquery.lighter.js"></script>
    <script src="{{url('')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/js/main.js"></script>
@endsection
