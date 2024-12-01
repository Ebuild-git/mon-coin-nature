@extends('front.fixe')
@section('titre', $produit->nom)
@section('body')
    @php

        $config = DB::table('configs')->first();
    @endphp

    <head>
    @section('header')
        <meta name="description" content="{{ $produit->description ?? ' ' }}">
        <meta name="author" content="konica.store">
        <meta property="og:title" content="{{ $produit->nom }}">
        <meta property="og:description" content="{{ $produit->description ?? '' }}">
        <meta property="og:brand" content="{{ $produit->marques->nom ?? '' }}">
        <meta property="og:image" content="{{ $produit->photo }}">
        <meta property="og:type" content="product">
        <meta property="og:price:amount" content="{{ $produit->prix }} DT">

        <meta property="og:availability" content="{{ $produit->statut }}">

        <meta property="product:price:amount" content="{{ $produit->prix }} DT">

        <meta property="product:availability" content="{{ $produit->statut }}">
        <meta name="robots" content="index, follow">


    @endsection


    <style>
        .custom-btn.custom-btn--style-1 {
            background-color: transparent
        }

        .custom-btn.custom-btn--style-1:focus,
        .custom-btn.custom-btn--style-1:hover,
        .custom-btn.custom-btn--style-2 {
            background-color: #009640
        }

        .custom-btn {
            border: 2px solid #009640;

            background-color: transparent;



        }

        .custom-btn:hover {
            background-color: #009640;
            /* Couleur de fond */
            border-color: #009640;
            /* Couleur de la bordure */
            /* Couleur du texte */
            /* Agrandissement léger */
        }
    </style>


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
        var _html = document.documentElement,
            isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

        _html.className = _html.className.replace("no-js", "js");
        _html.classList.add(isTouch ? "touch" : "no-touch");
    </script>
    <script type="text/javascript" src="/js/device.min.js"></script>
</head>

<main>

    <body class="woocommerce-page product-page">
        <div id="app"><br>
            <br>
            <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%"
                style="background-image: url('{{ $config->image_shop ? Storage::url($config->image_shop) : asset('img/home_img/default.jpg') }}');background-position: top 30% left 70%;">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <h1 class="__title"><span>Mon Coin Nature</span>
                                {{ \App\Helpers\TranslationHelper::TranslateText($produit->nom) }}</h1>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end hero -->

            <!-- start main -->
            <main role="main">
                <!-- Common styles
    ================================================== -->
                <link rel="stylesheet" href="/css/style.min.css" type="text/css">

                <!-- Load lazyLoad scripts
    ================================================== -->
                <script>
                    (function(w, d) {
                        var m = d.getElementsByTagName('main')[0],
                            s = d.createElement("script"),
                            v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
                            o = {
                                elements_selector: ".lazy",
                                data_src: 'src',
                                data_srcset: 'srcset',
                                threshold: 500,
                                callback_enter: function(element) {

                                },
                                callback_load: function(element) {
                                    element.removeAttribute('data-src')

                                    oTimeout = setTimeout(function() {
                                        clearTimeout(oTimeout);

                                        AOS.refresh();
                                    }, 1000);
                                },
                                callback_set: function(element) {

                                },
                                callback_error: function(element) {
                                    element.src =
                                        "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
                                }
                            };
                        s.type = 'text/javascript';
                        s.async =
                            true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
                        s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
                        m.appendChild(s);
                        // m.insertBefore(s, m.firstChild);
                        w.lazyLoadOptions = o;
                    }(window, document));
                </script>

                <!-- start section -->
                <section class="section">
                    <div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
                        <img class="lazy" width="286" height="280" src="/img/blank.gif"
                            data-src="/img/decor-el_1.jpg" alt="demo" />
                    </div>

                    <div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
                        <img class="lazy" width="99" height="88" src="/img/blank.gif"
                            data-src="/img/decor-el_2.jpg" alt="demo" />
                    </div>

                    <div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
                        <img class="lazy" width="115" height="117" src="/img/blank.gif"
                            data-src="/img/decor-el_3.jpg" alt="demo" />
                    </div>

                    <div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
                        <img class="lazy" width="84" height="76" src="/img/blank.gif"
                            data-src="/img/decor-el_4.jpg" alt="demo" />
                    </div>

                    <div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
                        <img class="lazy" width="248" height="309" src="/img/blank.gif"
                            data-src="/img/decor-el_5.jpg" alt="demo" />
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-9">

                                <!-- start product single -->
                                <div class="product-single">
                                    <div class="row">
                                        <div class="col-12 col-lg-7">
                                            <div class="__product-img">
                                                <img width="330" src="{{ Storage::url($produit->photo) }}"
                                                    alt="demo" />
                                                @if ($produit->inPromotion())
                                                    <span class="product-label product-label--sale">
                                                        -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                @endif
                                                {{-- <span class="product-label product-label--new">New</span> --}}
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-5">
                                            <div class="content-container">
                                                <h3 class="__name">
                                                    {{ \App\Helpers\TranslationHelper::TranslateText($produit->nom) }}
                                                </h3>

                                                <div class="__categories">
                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Categorie') }}:
                                                    <span>
                                                        {{ \App\Helpers\TranslationHelper::TranslateText(Str::limit($produit->categories->nom, 30)) }}
                                                    </span>
                                                </div>
                                                <br><br>
                                                <div class="product-price">
                                                    @if ($produit->inPromotion())
                                                        <span class="product-price__item product-price__item--new">
                                                            {{ $produit->getPrice() }} DT
                                                        </span>





                                                        <span class="product-price__item product-price__item--old">
                                                            {{ $produit->prix }} DT
                                                        </span>
                                                    @else
                                                        <span class="product-price__item product-price__item--new">
                                                            {{ $produit->getPrice() }} <x-devise></x-devise>
                                                            </b></span>
                                                    @endif
                                                    {{-- <span class="product-price__item product-price__item--new">3,35 $</span> --}}
                                                </div>




                                                <p>
                                                    {!! \App\Helpers\TranslationHelper::TranslateText(Str::limit($produit->description, 100)) !!}

                                                </p>
                                                <br><br>
                                                <form class="__add-to-cart" action="#">
                                                    <div class="quantity-counter js-quantity-counter">
                                                        <span class="__btn __btn--minus"></span>
                                                        <input class="__q-input qty text" type="number"
                                                            name="quantite" min="1" value="1"
                                                            id="qte-{{ $produit->id }}" />
                                                        <span class="__btn __btn--plus"></span>
                                                    </div>
                                                    <br><br>
                                                    <a class="custom-btn custom-btn--medium custom-btn--style-1"
                                                        onclick="AddToCart( {{ $produit->id }} )"><i
                                                            class="fontello-shopping-bag"></i>
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Ajouter au panier') }}</a>
                                                </form>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="spacer py-5 py-md-9"></div>

                                            <!-- start tab -->
                                            <div class="tab-container">
                                                <nav class="tab-nav">
                                                    <a href="#">Description</a>

                                                </nav>

                                                <div class="tab-content">
                                                    <div class="tab-content__item is-visible">
                                                        <p>
                                                            {!! \App\Helpers\TranslationHelper::TranslateText($produit->description ?? ' ') !!}
                                                        </p>


                                                    </div>


                                                </div>
                                            </div>
                                            <!-- end tab -->

                                            <div class="spacer py-5 py-md-9"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- start product single -->

                                <h2> {{ \App\Helpers\TranslationHelper::TranslateText('Les produits de la même famille') }}
                                </h2>
                                <div class="spacer py-2"></div>
                                @php

                                    $relatedProducts = $produit->categories->produits->where('id', '!=', $produit->id);

                                @endphp
                                <!-- start goods -->
                                <div class="goods goods--style-1">
                                    <div class="__inner">
                                        <div class="row">
                                            <!-- start item -->
                                            @if ($relatedProducts)
                                                @foreach ($relatedProducts as $produit)
                                                    <div class="col-12 col-sm-6 col-lg-4">
                                                        <div class="__item">
                                                            <figure class="__image">
                                                                <img class="lazy" width="180"
                                                                    src="{{ Storage::url($produit->photo) }}"
                                                                    data-src="{{ Storage::url($produit->photo) }}"
                                                                    alt="demo" />
                                                            </figure>

                                                            <div class="__content">
                                                                <h4 class="h6 __title"><a
                                                                        href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ \App\Helpers\TranslationHelper::TranslateText(Str::limit($produit->nom, 15)) }}</a>
                                                                </h4>



                                                                <div class="product-price">
                                                                    @if ($produit->inPromotion())
                                                                        <span
                                                                            class="product-price__item product-price__item--new">
                                                                            {{ $produit->getPrice() }} DT
                                                                        </span>





                                                                        <span
                                                                            class="product-price__item product-price__item--old">
                                                                            {{ $produit->prix }} DT
                                                                        </span>
                                                                    @endif
                                                                </div>

                                                                <a style="font-size: 10px;"
                                                                    class="custom-btn custom-btn--medium custom-btn--style-1"
                                                                    onclick="AddToCart( {{ $produit->id }} )"><i
                                                                        class="fontello-shopping-bag"></i>
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Ajouter au panier') }}</a>
                                                            </div>
                                                            @if ($produit->inPromotion())
                                                                <span class="product-label product-label--sale">
                                                                    -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                            @endif


                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <!-- end item -->

                                        </div>
                                    </div>
                                </div>
                                <!-- end goods -->

                            </div>

                            <div class="col-12 my-6 d-md-none"></div>

                            <div class="col-12 col-md-4 col-lg-3">
                                <aside class="sidebar">

                                    <div class="widget widget--search">
                                        <form class="form--horizontal" role="search" action="{{ url('search') }}"
                                            method="get">
                                            <div class="input-wrp">
                                                <input value="{{ $nom ?? '' }}" class="textfield" id="search"
                                                    type="search" name="search"
                                                    placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Rechercher produit') }}" />
                                            </div>

                                            <button class="custom-btn custom-btn--tiny custom-btn--style-1"
                                                type="submit"
                                                role="button">{{ \App\Helpers\TranslationHelper::TranslateText('Rechercher') }}</button>
                                        </form>
                                    </div>

                                    <div class="widget widget--categories">
                                        <h4 class="h6 widget-title">
                                            {{ \App\Helpers\TranslationHelper::TranslateText('RAYONS') }}</h4>

                                        <ul class="list">
                                            @foreach ($categories as $category)
                                                <li class="list__item">
                                                    <a class="list__item__link" href="/category/{{ $category->id }}"
                                                        class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText(Str::limit($category->nom, 25)) }}</a>
                                                    <span>({{ $category->produits->count() }})</span>
                                                </li>
                                            @endforeach


                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end widget -->

                                    <!-- start widget -->
                                    <div class="widget widget--price">
                                        {{-- <h4 class="h6 widget-title">Price</h4> --}}

                                        {{-- 	<div>
											<input type="text" class="js-range-slider" name="my_range" value=""
												data-type="double"
												data-min="0"
												data-max="500"
												data-from="48"
												data-to="365"
												data-grid="false"
												data-skin="round"
												data-prefix="$"
												data-hide-from-to="true"
												data-hide-min-max="true"
											/>

											<div class="row">
												<div class="col-6">
													<input class="range-slider-min-value" type="text" value="48" name="min-value" readonly="readonly">
												</div>

												<div class="col-6">
													<input class="range-slider-max-value" type="text" value="365" name="max-value" readonly="readonly">
												</div>
											</div>
										</div>
									</div> --}}
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--additional">
                                            <h4 class="h6 widget-title">
                                                {{ \App\Helpers\TranslationHelper::TranslateText('Familles') }}</h4>

                                            <ul>
                                                @foreach ($marques as $marque)
                                                    <li>
                                                        <label class="checkfield">
                                                            <input type="checkbox" checked />
                                                            <i></i>
                                                            {{ $marque->nom }}
                                                        </label>
                                                    </li>
                                                @endforeach



                                            </ul>
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--tags">
                                            {{-- <h4 class="h6 widget-title">Popular Tags</h4>

										<ul>
											<li><a href="#">Art</a></li>
											<li><a href="#">design</a></li>
											<li><a href="#">concept</a></li>
											<li><a href="#">Media</a></li>
											<li><a href="#">Photography</a></li>
											<li><a href="#">UI</a></li>
										</ul> --}}
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget">
                                            <div class="row no-gutters align-items-center">
                                                {{-- <div class="col">
												<button class="custom-btn custom-btn--medium custom-btn--style-1" role="button">Show Products</button>
											</div>

											<div class="col-auto">
												<a class="clear-filter" href="#">Clear all</a>
											</div> --}}
                                            </div>
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--products">
                                            <h4 class="h6 widget-title">
                                                {{ \App\Helpers\TranslationHelper::TranslateText('Les 5 dernières publication') }}
                                            </h4>
                                            @php
                                                $lastproduits = DB::table('produits')->latest()->take(5)->get();
                                            @endphp
                                            <ul>

                                                @foreach ($lastproduits as $produit)
                                                    <li>
                                                        <div class="row no-gutters">
                                                            <div class="col-auto __image-wrap">
                                                                <figure class="__image">
                                                                    <a
                                                                        href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                                                        <img class="lazy"
                                                                            src="{{ Storage::url($produit->photo) }}"
                                                                            data-src="{{ Storage::url($produit->photo) }}"
                                                                            alt="demo" />
                                                                    </a>
                                                                </figure>
                                                            </div>

                                                            <div class="col">
                                                                <h4 class="h6 __title"><a
                                                                        href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ \App\Helpers\TranslationHelper::TranslateText($produit->nom ?? ' ') }}</a>
                                                                </h4>



                                                                <div class="product-price">
                                                                    <span
                                                                        class="product-price__item product-price__item--new">
                                                                        {{ $produit->prix }} DT</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                        <!-- end widget -->
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end section -->


                <!-- end section -->
            </main>
            <!-- end main -->

        </div>


    </body>
</main>
@endsection
