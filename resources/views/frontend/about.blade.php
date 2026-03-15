@extends('frontend.app')

{{-- head --}}
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

{{-- content --}}
@section('content')
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>About BoShop - The Best Collection</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- History -->
        <section class="history-block padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="about-us-con">
                    <h3>A Brief History of the BoShop</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget pharetra
                        ac, cursus sed sapien. Cras posuere ligula ut blandit varius. Nunc consectetur scelerisque felis, et
                        volutpat massa aliquam in. Curabitur sodales porttitor tortor sit amet malesuada. <br>
                        <br>
                        Consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget pharetra ac, cursus sed sapien.
                        Cras posuere ligula ut blandit varius. Nunc consectetur scelerisque felis, et volutpat massa aliquam
                        in. Curabitur sodales porttitor tortor sit amet malesuada
                    </p>
                    <div class="offset-1 margin-top-50">
                        <h6>1950 <span></span> 1999</h6>
                        <p>Lorem ipsum dolor sit amet, efficitur eget pharetra ac, cursus sed sapien. Cras posuere ligula ut
                            blandit varius. Nunc consectetur scelerisque felis. consectetur adipiscing elit. Maecenas nibh
                            dolor</p>
                        <h6>2000 <span></span> 2018</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget
                            pharetra ac, cursus sed sapien. Cras posuere ligula ut blandit varius. Nunc consectetur
                            scelerisque felis, et volutpat massa aliquam in. Curabitur sodales porttitor tortor sit amet
                            malesuada.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Culture BLOCK -->
        <section class="cultur-block">
            <ul>
                <li> <img src="images/cultur-img-1.jpg" alt=""> </li>
                <li> <img src="images/cultur-img-2.jpg" alt=""> </li>
                <li> <img src="images/cultur-img-3.jpg" alt=""> </li>
                <li> <img src="images/cultur-img-4.jpg" alt=""> </li>
            </ul>

            <!-- Culture Text -->
            <div class="position-center-center">
                <div class="container">
                    <div class="col-sm-6 center-block">
                        <h4>Awesome Work Culture</h4>
                        <p>Phasellus lacinia fermentutm bibendum. Interdum et malante ipuctus non. Nulla lacinia,
                            eros vel fermentum consectetur, ris dolor in ex. </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR TEAM -->
        <section class="our-team light-gray-bg padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="heading text-center">
                    <h4>Our Team</h4>
                    <hr>
                </div>

                <!-- TEAM -->
                <ul class="row">

                    <!-- Member -->
                    <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.4s">
                        <article>
                            <!-- abatar -->
                            <div class="avatar"> <img class="img-circle" src="images/team-1.jpg" alt="">
                                <!-- Team hover -->
                                <div class="team-hover">
                                    <div class="position-center-center">
                                        <div class="social-icons"> <a href="#."><i
                                                    class="icon-social-facebook"></i></a> <a href="#."><i
                                                    class="icon-social-twitter"></i></a> <a href="#."><i
                                                    class="icon-social-dribbble"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Detail -->
                            <div class="team-names">
                                <h6>Mark Adnan</h6>
                                <p>CEO & FOUNDER</p>
                            </div>
                        </article>
                    </li>

                    <!-- Member -->
                    <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.6s">
                        <article>
                            <!-- abatar -->
                            <div class="avatar"> <img class="img-circle" src="images/team-2.jpg" alt="">
                                <!-- Team hover -->
                                <div class="team-hover">
                                    <div class="position-center-center">
                                        <div class="social-icons"> <a href="#."><i
                                                    class="icon-social-facebook"></i></a> <a href="#."><i
                                                    class="icon-social-twitter"></i></a> <a href="#."><i
                                                    class="icon-social-dribbble"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Detail -->
                            <div class="team-names">
                                <h6>jennifer rod</h6>
                                <p>DESIGNER</p>
                            </div>
                        </article>
                    </li>

                    <!-- Member -->
                    <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.8s">
                        <article>
                            <!-- abatar -->
                            <div class="avatar"> <img class="img-circle" src="images/team-3.jpg" alt="">
                                <!-- Team hover -->
                                <div class="team-hover">
                                    <div class="position-center-center">
                                        <div class="social-icons"> <a href="#."><i
                                                    class="icon-social-facebook"></i></a> <a href="#."><i
                                                    class="icon-social-twitter"></i></a> <a href="#."><i
                                                    class="icon-social-dribbble"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Detail -->
                            <div class="team-names">
                                <h6>natasha singh</h6>
                                <p>DEVELOPER</p>
                            </div>
                        </article>
                    </li>

                    <!-- Member -->
                    <li class="col-md-4 text-center">
                        <article>
                            <!-- abatar -->
                            <div class="avatar"> <img class="img-circle" src="images/team-4.jpg" alt="">
                                <!-- Team hover -->
                                <div class="team-hover">
                                    <div class="position-center-center">
                                        <div class="social-icons"> <a href="#."><i
                                                    class="icon-social-facebook"></i></a> <a href="#."><i
                                                    class="icon-social-twitter"></i></a> <a href="#."><i
                                                    class="icon-social-dribbble"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Detail -->
                            <div class="team-names">
                                <h6>Jahn Mark</h6>
                                <p>Product Designer</p>
                            </div>
                        </article>
                    </li>

                    <!-- Member -->
                    <li class="col-md-4 text-center">
                        <article>
                            <!-- abatar -->
                            <div class="avatar"> <img class="img-circle" src="images/team-5.jpg" alt="">
                                <!-- Team hover -->
                                <div class="team-hover">
                                    <div class="position-center-center">
                                        <div class="social-icons"> <a href="#."><i
                                                    class="icon-social-facebook"></i></a> <a href="#."><i
                                                    class="icon-social-twitter"></i></a> <a href="#."><i
                                                    class="icon-social-dribbble"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Detail -->
                            <div class="team-names">
                                <h6>jennifer rod</h6>
                                <p>Quality Head</p>
                            </div>
                        </article>
                    </li>

                    <!-- Member -->
                    <li class="col-md-4 text-center">
                        <article>
                            <!-- abatar -->
                            <div class="avatar"> <img class="img-circle" src="images/team-6.jpg" alt="">
                                <!-- Team hover -->
                                <div class="team-hover">
                                    <div class="position-center-center">
                                        <div class="social-icons"> <a href="#."><i
                                                    class="icon-social-facebook"></i></a> <a href="#."><i
                                                    class="icon-social-twitter"></i></a> <a href="#."><i
                                                    class="icon-social-dribbble"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Detail -->
                            <div class="team-names">
                                <h6>natasha singh</h6>
                                <p>DEVELOPER</p>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Client Img  -->
        <section class="fun-facts padding-top-100 padding-bottom-80">
            <div class="container">

                <!-- HEADING -->
                <div class="heading text-center">
                    <h4>Few Facts About BoShop</h4>
                    <hr>
                </div>

                <!-- FUN FACTS -->
                <ul class="row">

                    <!-- SALES -->
                    <li class="col-sm-4"> <span>457</span>
                        <h5>Sales</h5>
                    </li>

                    <!-- Products -->
                    <li class="col-sm-4"> <span>571</span>
                        <h5>Items</h5>
                    </li>

                    <!-- Clients -->
                    <li class="col-sm-4"> <span>289</span>
                        <h5>Clients Worldwide</h5>
                    </li>
                </ul>
            </div>
        </section>

        <!-- TWEET -->
        <section class="tweet padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="col-md-8 center-block"> <i class="icon-social-twitter"></i>
                    <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere
                        eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
                    <span><span>@johnsmith</span> 4 hours ago via Twitter</span>
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
@endsection
