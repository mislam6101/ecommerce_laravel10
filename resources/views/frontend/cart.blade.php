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
                <h4>Shopping Cart</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- PAGES INNER -->
        <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart text-center">
                    @if (auth()->check())
                        @foreach ($carts as $cart)
                            @if ($cart->product->discount_price > 0)
                                @php
                                    $dis = $cart->product->price - $cart->product->discount_price;
                                @endphp
                            @else
                                @php
                                    $dis = $cart->product->price;
                                @endphp
                            @endif
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="text-left">Items</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-left"> <!-- Media Image -->
                                            <a href="#." class="item-img"> <img class="media-object"
                                                    src="{{ asset('storage/' . $cart->product->image) }}" alt="">
                                            </a>
                                            <!-- Item Name -->
                                            <div class="media-body">
                                                <span>{{ $cart->product->name }}</span>
                                            </div>
                                        </th>
                                        <td><span class="price"><small>$</small>{{ $dis }}</span></td>
                                        <td>

                                            <div class="qty-box">

                                                <button type="button" class="minus">-</button>

                                                <input type="number" class="qty-input" data-id="{{ $cart->id }}"
                                                    value="{{ $cart->quantity }}" min="1">

                                                <button type="button" class="plus">+</button>

                                            </div>

                                            {{-- <div class="quantity">
                                                <input type="number" min="1" max="100" step="1"
                                                    value="1" class="form-control qty">
                                            </div> --}}
                                        </td>
                                        <td><span class="price"
                                                id="total-{{ $cart->id }}"><small>$</small>{{ $dis * $cart->quantity }}</span>
                                        </td>
                                        <td><a href="#."><i class="icon-close"></i></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        @endforeach
                    @else
                        {{-- for guest cart --}}
                        @foreach ($carts as $id => $item)
                            @if ($item['discount'])
                                @php
                                    $disg = $item['price'] - $item['discount'];
                                @endphp
                            @else
                                @php
                                    $disg = $item['price'];
                                @endphp
                            @endif
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="text-left">Items</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-left"> <!-- Media Image -->
                                            <a href="#." class="item-img"> <img class="media-object"
                                                    src="{{ asset('storage/' . $item['image']) }}" alt="">
                                            </a>
                                            <!-- Item Name -->
                                            <div class="media-body">
                                                <span>{{ $item['name'] }}</span>
                                            </div>
                                        </th>
                                        <td><span class="price"><small>$</small>{{ $disg }}</span></td>
                                        <td>

                                            <div class="qty-box">

                                                <button type="button" class="minus">-</button>

                                                <input type="number" class="qty-input" data-id="{{ $id }}"
                                                    value="{{ $item['quantity'] }}" min="1">

                                                <button type="button" class="plus">+</button>

                                            </div>

                                            {{-- <div class="quantity">
                                                <input type="number" min="1" max="100" step="1"
                                                    value="1" class="form-control qty">
                                            </div> --}}
                                        </td>
                                        <td><span id="total-{{ $id }}"
                                                class="price"><small>$</small>{{ $disg * $item['quantity'] }}</span>
                                        </td>
                                        <td><a href="#."><i class="icon-close"></i></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <!-- PAGES INNER -->
        <section class="padding-top-100 padding-bottom-100 light-gray-bg shopping-cart small-cart">
            <div class="container">

                <!-- SHOPPING INFORMATION -->
                <div class="cart-ship-info margin-top-0">
                    <div class="row">

                        <!-- DISCOUNT CODE -->
                        <div class="col-sm-7">
                            <h6>Discound Code</h6>
                            <form>
                                <input type="text" value="" placeholder="ENTER YOUR CODE IF YOU HAVE ONE">
                                <button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>
                            </form>
                            <div class="coupn-btn"> <a href="#." class="btn">continue shopping</a> <a
                                    href="#." class="btn">update cart</a> </div>
                        </div>

                        <!-- SUB TOTAL -->
                        <div class="col-sm-5">
                            <h6>Grand Total</h6>
                            <div class="grand-total">
                                <div class="order-detail">
                                    <p>Skinny Jeans <span>$598 </span></p>
                                    <p>Shirts Skinny <span>$199 </span></p>
                                    <p>Shoes White Pair <span> $139</span></p>

                                    <!-- SUB TOTAL -->
                                    <p class="all-total">TOTAL COST <span> $998</span></p>
                                </div>
                                <a href="#." class="btn margin-top-20">Proceed to checkout</a>
                            </div>
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

    <script>
        document.querySelectorAll('.qty-box').forEach(box => {

            let plus = box.querySelector('.plus');
            let minus = box.querySelector('.minus');
            let input = box.querySelector('.qty-input');

            plus.addEventListener('click', () => updateQty(input, 'increment'));
            minus.addEventListener('click', () => updateQty(input, 'decrement'));

        });

        function updateQty(input, type) {

            let id = input.dataset.id;

            fetch("/cart/update", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        id: id,
                        type: type
                    })
                })
                .then(res => res.json())
                .then(data => {

                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    input.value = data.quantity;
                    document.getElementById('total-' + id).innerText = data.total;

                })
                .catch(err => console.log(err));
        }
    </script>
@endsection
