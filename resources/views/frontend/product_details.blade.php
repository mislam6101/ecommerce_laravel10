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
        <link rel="stylesheet" type="text/css" href="{{ url('') }}/rs-plugin/css/settings.css" media="screen" />

        <!-- Bootstrap Core CSS -->
        <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ url('') }}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{ url('') }}/css/ionicons.min.css" rel="stylesheet">
        <link href="{{ url('') }}/css/main.css" rel="stylesheet">
        <link href="{{ url('') }}/css/style.css" rel="stylesheet">
        <link href="{{ url('') }}/css/responsive.css" rel="stylesheet">
        <link href="{{ url('') }}/font/flaticon.css" rel="stylesheet">

        <!-- JavaScripts -->
        <script src="{{ url('') }}/js/modernizr.js"></script>

        <!-- Online Fonts -->
        <link
            href="{{ url('') }}/https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800"
            rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                                        <script src="{{ url('') }}/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                                        <script src="{{ url('') }}/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                                    <![endif]-->

        <style>
            .line-through {
                text-decoration: line-through;
            }
        </style>

    </head>
@endsection

@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Popular Products -->
        <section class=" padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- SHOP DETAIL -->
                <div class="shop-detail">
                    <div class="row">

                        <!-- Popular Images Slider -->
                        <div class="col-md-7">

                            <!-- Images Slider -->
                            <div class="images-slider">
                                <ul class="slides">
                                    <li data-thumb="images/item-img-1-1.jpg"> <img class="img-responsive"
                                            src="{{ asset('storage/' . $product->image) }}" alt=""> </li>
                                    <li data-thumb="images/item-img-1-4.jpg"> <img class="img-responsive"
                                            src="{{ asset('storage/' . $product->image) }}" alt=""> </li>
                                    <li data-thumb="images/item-img-1-5.jpg"> <img class="img-responsive"
                                            src="{{ asset('storage/' . $product->image) }}" alt=""> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- COntent -->
                        <div class="col-md-5">
                            <h4>{{ $product->name }}</h4>
                            <div class="rating-strs"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                            </div>
                            @if ($product->discount_price > 0)
                                @php
                                    $dis = $product->price - $product->discount_price;
                                @endphp
                                <span class="price"><small>$</small>{{ $dis }}</span>
                                <small></small><span class="line-through">{{ $product->price }}</span>
                            @else
                                <span class="price"><small>$</small>{{ $product->price }}</span>
                            @endif

                            <ul class="item-owner">
                                <li>Brand:<span> Top Shop</span></li>
                            </ul>

                            <!-- Item Detail -->
                            <p>{{ $product->description }}</p>

                            <!-- Short By -->
                            <div class="some-info">
                                <ul class="row margin-top-30">
                                    <li class="col-md-6">

                                        <!-- Quantity -->
                                        <div class="quinty">
                                            <button type="button" class="quantity-left-minus" data-type="minus"
                                                data-field=""> <span>-</span> </button>
                                            <input type="number" id="quantity" name="quantity"
                                                class="form-control input-number" value="1">
                                            <button type="button" class="quantity-right-plus" data-type="plus"
                                                data-field=""> <span>+</span> </button>
                                        </div>
                                    </li>

                                    <!-- ADD TO CART -->
                                    <li class="col-md-6"> <a href="{{ url('') }}/#." class="btn">ADD TO CART</a>
                                    </li>

                                    <!-- LIKE -->
                                    <li class="col-md-6"> <a href="{{ url('') }}/#." class="like-us"><i
                                                class="icon-heart"></i>
                                            ADD TO WISHLIST </a> </li>
                                </ul>

                                <!-- INFOMATION -->
                                <div class="inner-info">
                                    <h5>Share this item with your friends</h5>
                                    <!-- Social Icons -->
                                    <ul class="social_icons">
                                        <li><a href="{{ url('') }}/#."><i class="icon-social-facebook"></i></a></li>
                                        <li><a href="{{ url('') }}/#."><i class="icon-social-twitter"></i></a></li>
                                        <li><a href="{{ url('') }}/#."><i class="icon-social-tumblr"></i></a></li>
                                        <li><a href="{{ url('') }}/#."><i class="icon-social-youtube"></i></a></li>
                                        <li><a href="{{ url('') }}/#."><i class="icon-social-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Products -->
        <section class="dark-bg padding-top-100 padding-bottom-100">
            <div class="container-full">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>Popular Products</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                        Sed feugiat, tellus vel tristique posuere, diam</span>
                </div>

                <!-- Popular Item Slide -->
                <div class="papular-block block-slide">

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-1.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-1-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-1.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-2.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-2-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-2.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-3.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-3-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-3.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Sale -->
                        <div class="on-sale"> Sale </div>
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-4.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-4-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-4.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small><span class="line-through">299.00</span>
                            <small>$</small>199.00</span>
                    </div>
                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-5.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-5-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-5.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-6.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-6-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-6.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-7.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-7-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-7.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ url('') }}/images/item-img-1-8.jpg"
                                alt=""> <img class="img-2" src="{{ url('') }}/images/item-img-1-8-1.jpg"
                                alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ url('') }}/images/item-img-1-8.jpg"
                                            data-lighter><i class="icon-magnifier"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="{{ url('') }}/#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="{{ url('') }}/#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- WORK WITH US -->
        <section class="our-team padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="heading text-center">
                    <h4>We work with the best brands</h4>
                    <hr>
                </div>
            </div>
            <div class="container-full">
                <div class="clients-slide">
                    <div> <img src="{{ url('') }}/images/c-mg-1.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-2.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-3.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-1.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-2.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-3.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-1.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-2.png" alt=""> </div>
                    <div> <img src="{{ url('') }}/images/c-mg-3.png" alt=""> </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    <footer>
        <div class="container-full">
            <div class="insta-g">
                <div class="position-center-center">
                    <h3>From The @instgram</h3>
                </div>
                <ul>
                    <li><img src="{{ url('') }}/images/insta-post-1.jpg" alt=""></li>
                    <li><img src="{{ url('') }}/images/insta-post-2.jpg" alt=""></li>
                    <li><img src="{{ url('') }}/images/insta-post-6.jpg" alt=""></li>
                    <li><img src="{{ url('') }}/images/insta-post-4.jpg" alt=""></li>
                    <li><img src="{{ url('') }}/images/insta-post-5.jpg" alt=""></li>
                    <li><img src="{{ url('') }}/images/insta-post-3.jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT Location -->
                <div class="col-md-4">
                    <div class="about-footer"> <img class="margin-bottom-30"
                            src="{{ url('') }}/images/logo-foot.png" alt="">
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
                        <li><a href="{{ url('') }}/#."> Products</a></li>
                        <li><a href="{{ url('') }}/#."> Find a Store</a></li>
                        <li><a href="{{ url('') }}/#."> Features</a></li>
                        <li><a href="{{ url('') }}/#."> Privacy Policy</a></li>
                        <li><a href="{{ url('') }}/#."> Blog</a></li>
                        <li><a href="{{ url('') }}/#."> Press Kit </a></li>
                        <li><a href="{{ url('') }}/#."> Products</a></li>
                        <li><a href="{{ url('') }}/#."> Find a Store</a></li>
                        <li><a href="{{ url('') }}/#."> Features</a></li>
                        <li><a href="{{ url('') }}/#."> Privacy Policy</a></li>
                        <li><a href="{{ url('') }}/#."> Blog</a></li>
                        <li><a href="{{ url('') }}/#."> Press Kit </a></li>
                    </ul>
                </div>

                <!-- HELPFUL LINKS -->
                <div class="col-md-3">
                    <h6>Account Info</h6>
                    <ul class="link">
                        <li><a href="{{ url('') }}/#."> Products</a></li>
                        <li><a href="{{ url('') }}/#."> Find a Store</a></li>
                        <li><a href="{{ url('') }}/#."> Features</a></li>
                        <li><a href="{{ url('') }}/#."> Privacy Policy</a></li>
                        <li><a href="{{ url('') }}/#."> Blog</a></li>
                        <li><a href="{{ url('') }}/#."> Press Kit </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Rights -->
        <div class="rights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>© 2018 BoShop All right reserved. <a
                                href="{{ url('') }}/https://webicode.com/">webicode</a></p>
                    </div>
                    <div class="col-md-6 text-right"> <img src="{{ url('') }}/images/card-icon.png"
                            alt=""> </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="{{ url('') }}/#" class="cd-top"><i class="fa fa-angle-up"></i></a>
@endsection

@section('scripts')
    <script src="{{ url('') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ url('') }}/js/popper.min.js"></script>
    <script src="{{ url('') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('') }}/js/own-menu.js"></script>
    <script src="{{ url('') }}/js/jquery.lighter.js"></script>
    <script src="{{ url('') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('') }}/js/main.js"></script>
@endsection
