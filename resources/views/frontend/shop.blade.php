@extends('frontend.app')

{{-- header --}}
@section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="M_Adnan">
        <title>BoShop - Multipurpose eCommerce HTML5 Template</title>

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/ionicons.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="font/flaticon.css" rel="stylesheet">

        <!-- JavaScripts -->
        <script src="js/modernizr.js"></script>

        <!-- Online Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800"
            rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
        <style>
            .thumb {
                position: relative;
            }

            .out-product img {
                opacity: 0.3;
            }

            .out-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 18px;
                font-weight: 600;
                color: #ca0000;
                z-index: 10;
            }
        </style>

    </head>
@endsection

{{-- content --}}
@section('content')
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>Bo Shop 5 Col Items </h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Items</li>
                </ol>
            </div>
        </div>
    </section>

    <div id="content">

        <!-- Popular Products -->
        <section class="shop-page padding-top-100 padding-bottom-100">
            <div class="container-full">
                <div class="item-fltr">
                    <!-- short-by -->
                    <div class="short-by"> Showing 1–10 of 20 results </div>
                    <!-- List and Grid Style -->
                    <div class="lst-grd"> <a href="#" id="list"><i class="flaticon-interface"></i></a> <a
                            href="#" id="grid"><i class="icon-grid"></i></a>
                        <!-- Select -->
                        <select>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                        </select>
                    </div>
                </div>

                <!-- Item -->
                <div id="products" class="arrival-block list-group">
                    <div class="row">
                        <!-- Item -->
                        @foreach ($products as $p)
                            @php
                                $dis = $p->price - $p->discount_price;
                            @endphp
                            <div class="item">
                                <div class="img-ser">
                                    @if ($p->discount_price > 0)
                                        <div class="on-sale"> Sale </div>
                                    @endif

                                    <!-- Images -->
                                    <div
                                        class="thumb {{ $p->status == 0 ? 'out-product' : '' }} {{ $p->stock == 0 ? 'out-product' : '' }}">

                                        @if ($p->status == 0 || $p->stock == 0)
                                            <div class="out-text">Out Of Stock</div>
                                        @endif

                                        <img style="height: 300px" class="img-1" src="{{ asset('storage/' . $p->image) }}"
                                            alt="">
                                        <img style="height: 300px" class="img-2" src="{{ asset('storage/' . $p->image) }}"
                                            alt="">
                                        <!-- Overlay  -->
                                        @if ($p->status == 0 || $p->stock == 0)
                                        @else
                                            <div class="overlay">
                                                <div class="position-center-center"> <a
                                                        href="{{ route('product.details', $p->id) }}"><i
                                                            class="icon-eye"></i></a> </div>
                                                <div class="add-crt"><a href="{{ route('cart.add', $p->id) }}"><i
                                                            class="icon-basket margin-right-10"></i>
                                                        Add To Cart</a></div>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Item Name -->
                                    <div class="item-name fr-grd"> 
                                        @if ($p->status == 0 || $p->stock == 0)
                                        <a class="i-tittle">{{ $p->name }}</a>
                                        @else
                                            <a href="{{ route('product.details', $p->id) }}"
                                            class="i-tittle">{{ $p->name }}</a>
                                        @endif
                                        <span class="price">
                                            @if ($p->discount_price > 0)
                                                <small>$</small><span class="line-through">{{ $p->price }}</span>
                                                <small>$</small>{{ $dis }}
                                        </span> <a class="deta animated fadeInRight"
                                            href="{{ route('product.details', $p->id) }}">View Detail</a>
                                    @else
                                        <small>$</small>{{ $p->price }}</span>
                                        @if ($p->status == 0 || $p->stock == 0)
                                        @else
                                            <a class="deta animated fadeInRight"
                                                href="{{ route('product.details', $p->id) }}">View Detail</a>
                                        @endif
                        @endif

                    </div>
                    <!-- Item Details -->
                    <div class="cap-text">
                        <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a>
                            <span class="price"><small>$</small><span class="line-through">299.00</span>
                                <small>$</small>199.00</span>
                            <!-- Stars -->
                            <div class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <a
                                    href="#." class="wsh-list"><i class="icon-heart"></i> ADD TO WISHLIST</a> </div>
                            <!-- Details -->
                            <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante
                                ipsum
                                primis in faucibus.</p>

                            <!-- List Style -->
                            <ul class="list-style">
                                <li> Best Shop Products </li>
                                <li> Color Option </li>
                                <li> All Sizes </li>
                                <li> Discounted Prices </li>
                                <li> Refund Poloicy </li>
                                <li> New Arrival </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div id="more-products" style="display:none;">
                <div class="row">
                    @foreach ($allProducts as $p)
                        @php
                            $dis = $p->price - $p->discount_price;
                        @endphp

                        <div class="item">
                            <div class="img-ser">

                                @if ($p->discount_price > 0)
                                    <div class="on-sale"> Sale </div>
                                @endif

                                <!-- Images -->
                                <div
                                    class="thumb {{ $p->status == 0 ? 'out-product' : '' }} {{ $p->stock == 0 ? 'out-product' : '' }}">

                                    @if ($p->status == 0 || $p->stock == 0)
                                        <div class="out-text">Out Of Stock</div>
                                    @endif

                                    <img class="img-1" src="{{ asset('storage/' . $p->image) }}" alt="">
                                    <img class="img-2" src="{{ asset('storage/' . $p->image) }}" alt="">

                                    <!-- Overlay -->
                                    <div class="overlay">
                                        <div class="position-center-center">
                                            <a class="popup-with-move-anim" href="#qck-view-shop">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </div>

                                        <div class="add-crt">
                                            <a href="{{ route('cart.add'), $p->id }}">
                                                <i class="icon-basket margin-right-10"></i>
                                                Add To Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item Name -->
                                <div class="item-name fr-grd">
                                    <a href="#." class="i-tittle">{{ $p->name }}</a>

                                    <span class="price">
                                        @if ($p->discount_price > 0)
                                            <small>$</small>
                                            <span class="line-through">{{ $p->price }}</span>
                                            <small>$</small>{{ $dis }}
                                        @else
                                            <small>$</small>{{ $p->price }}
                                        @endif
                                    </span>

                                    <a class="deta animated fadeInRight" href="#.">
                                        View Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

    </div>
    </div>

    <!-- View All Items -->
    <div class="text-center margin-top-30">
        <button id="viewAllBtn" class="btn margin-right-20">
            View All Shop Items
        </button>
    </div>

    <!-- Quick View -->
    <div id="qck-view-shop" class="zoom-anim-dialog qck-inside mfp-hide">
        <div class="row">
            <div class="col-md-6">

                <!-- Images Slider -->
                <div class="images-slider">
                    <ul class="slides">
                        <li data-thumb="images/item-img-1-1.jpg"> <img src="images/item-img-1-1.jpg" alt="">
                        </li>
                        <li data-thumb="images/item-img-1-1-1.jpg"> <img src="images/item-img-1-1-1.jpg" alt="">
                        </li>
                        <li data-thumb="images/item-img-1-1.jpg"> <img src="images/item-img-1-1.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Info -->
            <div class="col-md-6">
                <div class="contnt-info">
                    <h3>Mid Rise Skinny Jeans</h3>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                        demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                        for meaning here will be sorely disappointed. <br>
                        <br>
                        These words are here to provide the reader with a basic impression of how actual text
                        will appear in its final presentation.
                    </p>

                    <!-- Btn  -->
                    <div class="add-info">
                        <div class="quantity">
                            <input type="number" min="1" max="100" step="1" value="1"
                                class="form-control qty">
                        </div>
                        <a href="" class="btn btn-inverse"><i class="icon-heart"></i></a> <a href="#."
                            class="btn">ADD TO CART </a>
                    </div>
                </div>
            </div>
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
                            <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                            <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                            <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
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

    <!-- Clients -->
    <section class="clients light-gray-bg padding-top-60 padding-bottom-80">
        <div class="container-full">
            <div class="clients-slide">
                <div> <img src="images/c-mg-1.png" alt=""> </div>
                <div> <img src="images/c-mg-2.png" alt=""> </div>
                <div> <img src="images/c-mg-3.png" alt=""> </div>
                <div> <img src="images/c-mg-1.png" alt=""> </div>
                <div> <img src="images/c-mg-2.png" alt=""> </div>
                <div> <img src="images/c-mg-3.png" alt=""> </div>
                <div> <img src="images/c-mg-1.png" alt=""> </div>
                <div> <img src="images/c-mg-2.png" alt=""> </div>
                <div> <img src="images/c-mg-3.png" alt=""> </div>
            </div>
        </div>
    </section>
    </div>
@endsection

{{-- footer --}}
@section('footer')
    <footer>
        <div class="container">
            <div class="row">
                <!-- ABOUT Location -->
                <div class="col-md-4">
                    <div class="about-footer"> <img class="margin-bottom-30" src="images/logo-foot.png" alt="">
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
                        <li><a href="#."> Products</a></li>
                        <li><a href="#."> Find a Store</a></li>
                        <li><a href="#."> Features</a></li>
                        <li><a href="#."> Privacy Policy</a></li>
                        <li><a href="#."> Blog</a></li>
                        <li><a href="#."> Press Kit </a></li>
                        <li><a href="#."> Products</a></li>
                        <li><a href="#."> Find a Store</a></li>
                        <li><a href="#."> Features</a></li>
                        <li><a href="#."> Privacy Policy</a></li>
                        <li><a href="#."> Blog</a></li>
                        <li><a href="#."> Press Kit </a></li>
                    </ul>
                </div>

                <!-- HELPFUL LINKS -->
                <div class="col-md-3">
                    <h6>Account Info</h6>
                    <ul class="link">
                        <li><a href="#."> Products</a></li>
                        <li><a href="#."> Find a Store</a></li>
                        <li><a href="#."> Features</a></li>
                        <li><a href="#."> Privacy Policy</a></li>
                        <li><a href="#."> Blog</a></li>
                        <li><a href="#."> Press Kit </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Rights -->
        <div class="rights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>© 2018 BoShop All right reserved. <a href="https://webicode.com/">webicode</a></p>
                    </div>
                    <div class="col-md-6 text-right"> <img src="images/card-icon.png" alt=""> </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

{{-- scripts --}}
@section('scripts')
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/own-menu.js"></script>
    <script src="js/jquery.lighter.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.getElementById("viewAllBtn").addEventListener("click", function() {
            document.getElementById("more-products").style.display = "block";
            this.style.display = "none";
        });
    </script>
@endsection
