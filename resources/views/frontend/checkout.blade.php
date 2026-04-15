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

    </head>
@endsection

@section('content')
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>Checkout your order</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li class="active">CHECKOUT</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="chart-page padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <h6>Shipping Information</h6>
                                <form method="POST" action="{{ route('order.place') }}">
                                    @csrf
                                    <ul>

                                        <!-- Name -->
                                        <li>
                                            <label> *Your NAME
                                                <input type="text" name="name" value="" placeholder="" required>
                                            </label>
                                        </li>
                                        <!-- LAST NAME -->
                                        {{-- <li class="col-md-6">
                                            <label> *LAST NAME
                                                <input type="text" name="last-name" value="" placeholder="">
                                            </label>
                                        </li> --}}
                                        {{-- <li class="col-md-6">
                                            <!-- COMPANY NAME -->
                                            <label>COMPANY NAME
                                                <input type="text" name="company" value="" placeholder="">
                                            </label>
                                        </li> --}}
                                        <li>
                                            <!-- ADDRESS -->
                                            <label>*ADDRESS
                                                <input type="text" name="address" value="" placeholder="" required>
                                            </label>
                                        </li>
                                        <!-- TOWN/CITY -->
                                        {{-- <li class="col-md-6">
                                            <label>*TOWN/CITY
                                                <input type="text" name="town" value="" placeholder="">
                                            </label>
                                        </li> --}}

                                        <!-- COUNTRY -->
                                        {{-- <li class="col-md-6">
                                            <label> COUNTRY
                                                <input type="text" name="contry-state" value="" placeholder="">
                                            </label>
                                        </li> --}}

                                        <!-- EMAIL ADDRESS -->
                                        <li>
                                            <label> *EMAIL ADDRESS
                                                <input type="email" name="email" value="" placeholder="" required>
                                            </label>
                                        </li>
                                        <!-- PHONE -->
                                        <li>
                                            <label> *PHONE
                                                <input type="text" name="phone" value="" placeholder="" required>
                                            </label>
                                        </li>

                                        {{-- <!-- PHONE -->
                                        <li class="col-md-6">
                                            <button type="submit" class="btn">continue</button>
                                        </li> --}}

                                        {{-- <!-- CREATE AN ACCOUNT -->
                                        <li class="col-md-6">
                                            <div class="checkbox margin-0 ">
                                                <input id="checkbox1" class="styled" type="checkbox">
                                                <label for="checkbox1"> Ship to a different address </label>
                                            </div>
                                        </li> --}}
                                    </ul>



                            </div>

                            <!-- SUB TOTAL -->
                            <div class="col-sm-5">
                                <h6>Your Order</h6>
                                <div class="order-place">
                                    <div class="order-detail">
                                        <h5>Products</h5>
                                        @if (auth()->check())
                                            @foreach ($carts as $cart)
                                                @php
                                                    $price =
                                                        $cart->product->discount_price > 0
                                                            ? $cart->product->price - $cart->product->discount_price
                                                            : $cart->product->price;
                                                @endphp
                                                <p>
                                                    {{ $cart->product->name }}
                                                    <span>${{ $price * $cart->quantity }}</span>
                                                    @if ($cart->quantity > 1)
                                                        <span style="color:rgb(255, 166, 0); margin-right:40%;">
                                                            ×{{ $cart->quantity }}</span>
                                                    @endif
                                                </p>
                                            @endforeach
                                        @else
                                            @foreach ($carts as $id => $item)
                                                @php
                                                    $price =
                                                        $item['discount'] > 0
                                                            ? $item['price'] - $item['discount']
                                                            : $item['price'];
                                                @endphp

                                                <p>
                                                    {{ $item['name'] }}
                                                    <span>${{ $price * $item['quantity'] }}</span>
                                                    @if ($item['quantity'] > 1)
                                                        <span style="color:rgb(255, 166, 0);  margin-right:40%;">
                                                            ×{{ $item['quantity'] }}</span>
                                                    @endif


                                                </p>
                                            @endforeach
                                        @endif
                                        <br><br>
                                        <h5>Cost:</h5>
                                        <p>Subtotal <span id="sub-total">${{ $total }}</span></p>
                                        <p>Discount <span id="discount">- ${{ $discount }}</span></p>

                                        <p>Shipping <span id="shipping-cost">$0</span></p>
                                        <div class="row">
                                            <div class="radio col-md-6">
                                                <input type="radio" name="shipping" id="indhaka" value="indhaka">
                                                <label for="indhaka"> Inside Dhaka </label>
                                            </div>
                                            <div class="radio col-md-6">
                                                <input type="radio" name="shipping" id="outdhaka" value="outdhaka">
                                                <label for="outdhaka"> Outside Dhaka </label>
                                            </div>
                                        </div>

                                        <p class="all-total">
                                            TOTAL COST <span id="grand-total">${{ $grandTotal }}</span>
                                        </p>

                                    </div>

                                    <div class="pay-meth">
                                        <ul>

                                            <li>
                                                <div class="radio">
                                                    <input type="radio" name="payment_method" id="radio2" value="cod">
                                                    <label for="radio2"> CASH ON DELIVERY</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio">
                                                    <input type="radio" name="payment_method" id="radio3" value="online">
                                                    <label for="radio3">MAKE PAYMENT</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input id="checkbox3-4" class="styled" type="checkbox">
                                                    <label for="checkbox3-4"> I’VE READ AND ACCEPT THE <span
                                                            class="color">
                                                            TERMS & CONDITIONS </span> </label>
                                                </div>
                                            </li>
                                        </ul>
                                        <button class="btn  btn-dark pull-right margin-top-30">PLACE ORDER</button>

                                    </div>
                                    </form>
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
                    <li><img src="images/insta-post-1.jpg" alt=""></li>
                    <li><img src="images/insta-post-2.jpg" alt=""></li>
                    <li><img src="images/insta-post-6.jpg" alt=""></li>
                    <li><img src="images/insta-post-4.jpg" alt=""></li>
                    <li><img src="images/insta-post-5.jpg" alt=""></li>
                    <li><img src="images/insta-post-3.jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
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
        let baseTotal = {{ $grandTotal }}; // already discount applied

        document.querySelectorAll('input[name="shipping"]').forEach(radio => {

            radio.addEventListener('change', function() {

                let shipping = 0;

                if (this.value === 'indhaka') {
                    shipping = 80;
                } else if (this.value === 'outdhaka') {
                    shipping = 150;
                }

                document.getElementById('shipping-cost').innerText = '+ ' + '$' + shipping;

                let finalTotal = baseTotal + shipping;

                document.getElementById('grand-total').innerText = '$' + finalTotal;
            });

        });
    </script>
@endsection
