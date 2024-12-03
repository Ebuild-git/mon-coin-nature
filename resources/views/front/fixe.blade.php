@include('sweetalert::alert')
@php
$config = DB::table('configs')->first();
$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
@endphp
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>


    <title>MCN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#FCDB5A" />
    <meta name="msapplication-navbutton-color" content="#FCDB5A" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url($config->icon ?? ' ') }}">

    <!-- Critical styles
    ================================================== -->
    <link rel="stylesheet" href="/css/critical.min.css" type="text/css">

    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();

    </script>

    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement
            , isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

        _html.className = _html.className.replace("no-js", "js");
        _html.classList.add(isTouch ? "touch" : "no-touch");

    </script>


    <script type="text/javascript" src="/js/device.min.js"></script>

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/Script.js"></script>
    @yield('header')
</head>

<body class="woocommerce-page shop-home-page">
    <div id="app">

        <header id="top-bar" class="top-bar top-bar--style-2">
            <div class="top-bar__bg" style="background-color: #FFF;background-image: url(img/top_bar_bg-2.png);background-repeat: no-repeat;background-position: center bottom;"></div>

            <div class="container position-relative">
                <div class="row justify-content-between no-gutters">

                  
                    <a class="top-bar__logo site-logo" href="{{ route('home') }}">
                        <img class="img-fluid" src="{{ Storage::url($config->logo ?? ' ') }}" alt="demo" />
                    </a>
                    <style>
                        .site-logo {
                            display: flex;
                            align-items: center;
                            text-decoration: none;
                            padding: 0px;
                        }


                        .top-bar__logo {
  position: relative;
  margin-left: 2px;
  z-index: 6
}
.top-bar__logo img {
  height: 90px
}

.site-logo:hover img {
                            transform: scale(1.9);
                        }
                        .site-logo img {
                            height: 100px;
                            width: 100px;
                            object-fit: contain;
                            transition: transform 0.3s ease;
                            margin-top: -21px;
                        }

                        @media (max-width: 768px) {
                            .site-logo img {
                                height: 200px;
                                width: 200px;
                                margin-top: 30;
                                padding: 10;
                                margin-left: 20px;



                            }
                        }

                       /*  .site-logo:hover img {
                            transform: scale(1.9);
                        } */

                     
                         .site-logo {
                            padding: 5px;
                        }

                         .site-logo img {
                            max-height: 50px;
                        }

                </style>

                    <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler top-bar__navigation-toggler--dark" href="javascript:void(0);"><span></span></a>

                    <div id="top-bar__inner" class="top-bar__inner  text-lg-right">
                        <div>
                            <div class="d-lg-flex flex-lg-column-reverse align-items-lg-end">
                                <nav id="top-bar__navigation" class="top-bar__navigation navigation" role="navigation">
                                    <ul>
                                        <li class="has-submenu active">
                                            <a href="{{ route('home') }}">Home</a>

                                        </li>

                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('boutique') }}</a>
                                        </li>

                                        <li><a href="{{ route('about') }}">  {{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</a>
                                        </li>


   {{--                                      <li class="has-submenu">
                                            <a href="javascript:void(0);">Pages</a>

                                            <ul class="submenu">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="products.html">Products</a></li>
                                                <li><a href="products_details.html">Product Details</a></li>
                                                <li><a href="gallery_1.html">Gallery 1</a></li>
                                                <li><a href="gallery_2.html">Gallery 2</a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="404.html">404 page</a></li>
                                            </ul>
                                        </li> --}}

                                        <li style="display: none;" >
                                            <a href="javascript:void(0);"></a>

                                            <ul class="submenu">
                                                <li><a href="shop_catalog.html"></a></li>
                                                <li><a href="single_product.html"></a></li>
                                                <li><a href="cart.html"></a></li>
                                                <li><a href="checkout.html"></a></li>
                                                <li><a href="sign_in.html"></a></li>
                                            </ul>
                                        </li> 

                                      
                                        <li>
                                            <a href="{{ route('contact') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</a>
                                        </li>

                                        @if (Auth()->user())
                                        <li>
                                            <a href="{{ route('comptes') }}"> Mes commandes
                                            </a>
                                        </li>
                                        @endif

                                        @guest
                                        {{-- <li class="li-profile">
                                            <a href="{{ url('login') }}"><i class="fontello-profile"></i></a>
                                        </li> --}}
                                        
                                        <li>
                                            <a href="{{ url('login') }}">Connexion</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('register') }}">Inscription</a>
                                        </li>

                                        @else
                                    
                                        <li class="has-submenu active">
                                            <a href="javascript:void(0);">Mon compte</a>

                                            <ul class="submenu">
                                                @if (auth()->user()->role != 'client')
                                                <li><a href="{{ url('dashboard') }}">Dashboard</a>
                                                </li>
                                                @endif
                                             {{--   <li>
                                                <a href="{{ route('account') }}">
                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Mon compte') }}
                                                </a>
                                               </li> --}}
                                               {{--  <li><a href="{{ route('favories') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Mes favoris') }}</a></li>
                                               --}}   <li><a href="{{ route('cart') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Mon panier') }}</a></li>

                                                <li><a href="{{ route('profile') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Paramètres') }}</a></li>
                                             
                                                   <li>

                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Déconnexion') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest

                                        <li class="li-cart">
                                            <a href="{{ route('cart') }}"><i class="fontello-shopping-bag"></i><span class="total" id="count-panier-span">0</span></a>
                                        </li>

                                        
                                        <li>

                                            <style>
                                                .custom-dropdown {
                                                    position: relative;
                                                    display: inline-block;
                                                }

                                                .dropbtn {
                                                    background-color: #ffffff;
                                                    color: #000;
                                                    padding: 10px 15px;
                                                    font-size: 16px;
                                                    border: 1px solid #ccc;
                                                    border-radius: 5px;
                                                    cursor: pointer;
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .dropbtn img {
                                                    margin-right: 8px;
                                                }

                                                .dropdown-content {
                                                    display: none;
                                                    position: absolute;
                                                    background-color: #ffffff;
                                                    min-width: 150px;
                                                    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
                                                    z-index: 1;
                                                    border: 1px solid #ccc;
                                                    border-radius: 5px;
                                                }

                                                .dropdown-content .dropdown-item {
                                                    display: flex;
                                                    align-items: center;
                                                    padding: 10px 15px;
                                                    background-color: transparent;
                                                    border: none;
                                                    width: 100%;
                                                    text-align: left;
                                                    cursor: pointer;
                                                    margin: 2px 0;
                                                }


                                                .dropdown-content .dropdown-item img {
                                                    margin-right: 8px;
                                                }

                                                .dropdown-content .dropdown-item:hover {
                                                    background-color: #f0f0f0;
                                                }

                                                .dropdown:hover .dropdown-content {
                                                    display: block;
                                                }

                                            </style>


                                            <div class="custom-dropdown">
                                                <form action="{{ route('locale.change') }}" method="POST">
                                                    @csrf
                                                    <div class="dropdown">
                                                        <button class="dropbtn" {{-- style="background-color: #009640" --}}>
                                                            {{ app()->getLocale() == 'fr' ? 'Français' : 'English' }}
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <button type="submit" name="locale" value="fr" class="dropdown-item">
                                                                <img src="https://img.icons8.com/color/20/france-circular.png" alt="fr">
                                                                Français
                                                            </button>
                                                            <button type="submit" name="locale" value="en" class="dropdown-item">
                                                                <img src="https://img.icons8.com/color/20/great-britain-circular.png" alt="en">
                                                                English
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </li>
                                    </ul>
                                </nav>
{{-- 
                                <div class="top-bar__contacts">
                                    <span>{{ $config->addresse ?? ' ' }}</span>
                                    <span><a href="#">{{ $config->telephone  ??  ' ' }}</a></span>
                                    <br>
                                    <span><a href="mailto:support@agrocompany.com">{{ $config->email ?? ' ' }}</a></span>

                                    <div class="social-btns">
                                        
                                        <a class="fontello-facebook" href="{{ $config->facebook ?? ' ' }}"></a>
                                        <a class="fontello-linkedin-squared" href="{{ $config->linkedin }}"></a>
                                        <a class="fontello-instagram" href="{{ $config->instagram  ?? ' ' }}"></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <main>



            @yield('body')




        </main>

        <!-- start footer -->
        <footer id="footer" class="footer footer--style-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                        <div class="footer__item">
                            <a class="site-logo" href="{{ route('home') }}">
                                <img class="img-fluid  lazy" src="{{ Storage::url($config->logo ?? ' ') }}" data-src="{{ Storage::url($config->logo ?? ' ') }}" alt="demo" />
                            </a>

                            
                        </div>
                    </div>

                    <div class="col-12 col-md-9 col-lg-6">
                        <div class="footer__item">
                            <nav id="footer__navigation" class="navigation">
                                <div class="row">
                                    <div class="col-6 col-sm-4">
                                        <h5 class="footer__item__title h6">{{ \App\Helpers\TranslationHelper::TranslateText('Contact Info') }}</h5>

                                        <ul>

                                          
                                            <p class="logo" style="font-size: 18px; line-height: 1.6; text-align: justify;">
                                    {{ $config->telephone ?? ' ' }}
                                </p>

                                <p class="logo" style="font-size: 18px; line-height: 1.6; text-align: justify;">
                                    <a href="mailto:support@agrocompany.com"> {{ $config->email ?? ' ' }}</a>
                                </p> 
<br>
                                        </ul>
                                    </div>

                                    <div class="col-6 col-sm-4">
                                        <h5 class="footer__item__title h6">{{ \App\Helpers\TranslationHelper::TranslateText('Mon compte') }}</h5>

                                        <ul>
                                            @if (Auth()->user())
                                            <li><a href="{{ route('profile') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Paramètres') }}</a></li>
                                            
                                          {{--   <li><a href="{{ route('favories') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Mes favoris') }}</a></li>
 --}}                                            <li><a href="{{ route('cart') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Mon panier') }}</a></li>
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="col-6 col-sm-4">
                                        <h5 class="footer__item__title h6"> {{ \App\Helpers\TranslationHelper::TranslateText(' Pages') }}</h5>

                                        <ul>
                                            <li><a href="{{ route('home') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
                                            <li><a href="{{ route('about') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</a></li>

                                            <li><a href="{{ route('shop') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Produits') }}</a></li>
                                            <li><a href="{{ route('contact') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12 col-md col-lg-4">
                        <div class="footer__item">
                            <h5 class="footer__item__title h6"> {{ \App\Helpers\TranslationHelper::TranslateText('Mon Coin Vert') }}</h5>

                            <address>

                                
                                <p class="logo" style="font-size: 18px; line-height: 1.6; text-align: justify;">
                             
                                    {!! \App\Helpers\TranslationHelper::TranslateText($config->description) !!}
                                </p>
                               {{--  <p>
                                    {{ $config->addresse ?? ' ' }}
                                </p>

                                <p>
                                    {{ $config->telephone ?? ' ' }}
                                </p>

                                <p>
                                    <a href="mailto:support@agrocompany.com"> {{ $config->email ?? ' ' }}</a>
                                </p> --}}
                            </address>

                            <div class="social-btns">

                                <a href="#"><i class="fontello-facebook"></i></a>
                                <a href="#"><i class="fontello-linkedin-squared"></i></a>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-lg-end justify-content-lg-between copyright">
                    <div class="col-12 col-lg-6">
                        <div class="footer__item">
                            <span class="__copy">©{{ date('Y') }}, Mon Coin | Design By <a class="__dev" href="https://www.e-build.tn" style="color: #c71f17;" target="_blank"> <b> E-build </b></a> </span>
                        </div>
                    </div>


                </div>
            </div>
        </footer>

    </div>


    <div id="btn-to-top-wrap">
        <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')

    </script>

    <script type="text/javascript" src="js/main.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');

    </script>

</body>

</html>
