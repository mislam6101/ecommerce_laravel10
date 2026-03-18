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
    <div id="content">

        <!-- PAGES INNER -->
        <section class="chart-page login gray-bg padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- Login Register -->
                            <div class="col-sm-7 center-block">

                                <!-- Nav Tabs -->
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" id="login-tab"
                                            href="{{ route('login') }}" role="tab" aria-selected="flase">Login</a> </li>
                                    <li class="nav-item"> <a class="nav-link" id="reg-tab" href="#" role="tab"
                                            aria-selected="true">Register</a> </li>
                                </ul>

                                <!-- Login Register Inside -->
                                <div class="tab-content" id="myTabContent">

                                    <!-- Login -->
                                    <div class="tab-pane fade show active" id="log" role="tabpanel"
                                        aria-labelledby="login-tab">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <ul class="row">
                                                <!-- Name -->
                                                <li class="col-md-12">
                                                    <label>Name
                                                        <input type="text" name="name" value="" placeholder=""
                                                            class="form-control">
                                                        @error('name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </label>
                                                </li>

                                                <!-- Email -->
                                                <li class="col-md-12">
                                                    <label>Email Address
                                                        <input type="text" name="email" value="" placeholder=""
                                                            class="form-control">
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </label>

                                                </li>
                                                <!-- Create Password -->
                                                <li class="col-md-12">
                                                    <label>Create Password
                                                        <input type="password" name="password" value="" placeholder=""
                                                            class="form-control">

                                                    </label>
                                                </li>

                                                <!-- Confirm Password -->
                                                <li class="col-md-12">
                                                    <label>Confirm Password
                                                        <input type="password" name="password_confirmation" value=""
                                                            placeholder="" class="form-control">
                                                        @error('password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </label>
                                                </li>

                                                <!-- LOGIN -->
                                                <li class="col-md-6">
                                                    <button type="submit" class="btn">REGISTER</button>
                                                </li>
                                            </ul>
                                        </form>

                                        <!-- Main Heading -->
                                        <div class="heading text-center margin-bottom-50 margin-top-50">
                                            <h4>LOGIN WITH SOCIAL MEDIA</h4>
                                            <hr>
                                        </div>
                                        <ul class="login-with">
                                            <li> <a href="#."><i class="fa fa-facebook"></i>FACEBOOK</a> </li>
                                            <li> <a href="#."><i class="fa fa-google"></i>GOOGLE</a> </li>
                                            <li> <a href="#."><i class="fa fa-twitter"></i>TWITTER</a> </li>
                                        </ul>
                                    </div>
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
@endsection
