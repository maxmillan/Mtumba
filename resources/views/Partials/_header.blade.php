<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from colorlib.com/preview/theme/divisima/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 13:59:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Mutumba | Online Shopping</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="img/favicon.ico" rel="shortcut icon" />

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->
</head>
<body>

<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section" >
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div     class="col-lg-2 text-center text-lg-left">

                    <a href="{{url('/')}}" class="site-logo">
                        <img src="{{asset('img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Search on divisima ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                @if(auth()->check())
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        @if(\App\Cart::where('user_id',auth()->user()->id)->count()==0)
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                </div>
                                <a href="{{url('cart')}}">Shopping Cart</a>
                            </div>
                        @else

                            <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>{{\App\Cart::where('user_id',auth()->user()->id)->count()}}</span>
                            </div>
                            <a href="{{url('cart')}}">Shopping Cart</a>
                        </div>
                        @endif
                        <div class="up-item">
                            <a href="{{url('orderDetails')}}">Order Details</a>
                        </div>
                            <div class="up-item">
                                <span class="border  border-danger"><img alt="Mert S. Kaplan" src="{{asset(url('img/default.jpeg'))}}" class="twPc-avatarImg" style="width:40px;height:40px;"></span>

                            </div>
                            <div class="up-item">
                                    <div class="dropdown show">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{auth()->user()->first}} {{auth()->user()->last}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <form action="{{route('logout')}}" method="post">
                                                @csrf
                                                <button class="btn btn-outline-secondary" type="submit">Logout</button>

                                            </form>
                                        </div>
                                    </div>

                         </div>

                </div>
                    @else
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="{{url('login')}}">Sign In </a> or <a href="{{url('register')}}">Create Account</a>
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                </div>
                                <a href="{{url('cart')}}">Shopping Cart</a>
                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">

        </div>
    </nav>
</header>
