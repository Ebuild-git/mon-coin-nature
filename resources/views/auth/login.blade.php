@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')
<main>
    @php
    $config = DB::table('configs')->first();
    $service = DB::table('services')->get();
    $produit = DB::table('produits')->get();
    @endphp


	<body class="woocommerce-page auth-page">
		<div id="app">
		
			<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%" style="background-image: url(img/intro_img/15.jpg);color: #333;">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7">
							<h1 class="__title"><span>Agro Shop</span> Sign in/up</h1>

							<p>
								The point of using is that it has a more-or-less normal distribution of letters, as opposed to using Content here content here making it look
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end hero -->

			<!-- start main -->
			<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- Load lazyLoad scripts
				================================================== -->
				<script>
					(function(w, d){
						var m = d.getElementsByTagName('main')[0],
							s = d.createElement("script"),
							v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
							o = {
								elements_selector: ".lazy",
								data_src: 'src',
								data_srcset: 'srcset',
								threshold: 500,
								callback_enter: function (element) {

								},
								callback_load: function (element) {
									element.removeAttribute('data-src')

									oTimeout = setTimeout(function ()
									{
										clearTimeout(oTimeout);

										AOS.refresh();
									}, 1000);
								},
								callback_set: function (element) {

								},
								callback_error: function(element) {
									element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
								}
							};
						s.type = 'text/javascript';
						s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
						s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
						m.appendChild(s);
						// m.insertBefore(s, m.firstChild);
						w.lazyLoadOptions = o;
					}(window, document));
				</script>

				<!-- start section -->
				<section class="section">
					<div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="286" height="280" src="img/blank.gif" data-src="img/decor-el_1.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="115" height="117" src="img/blank.gif" data-src="img/decor-el_3.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="84" height="76" src="img/blank.gif" data-src="img/decor-el_4.jpg" alt="demo"/>
					</div>

                    
					<div class="container">
						<div class="row">
                            <div class="col-sm-4">
                                <div class="heading-section">
                                  
                                    
                                </div>
                            </div>
							<div class="col-12 col-md-6 col-lg-5 col-xl-4 ">
								<h2> {{ \App\Helpers\TranslationHelper::TranslateText('Connexion') }}</h2>
                                @livewire('connexion')
								<!-- start form -->
						{{-- 		<form class="auth-form" action="#">
									<div class=" input-wrp">
										<input class="textfield" type="text" placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Votre adresse mail') }} *" />
									</div>

									<div class="input-wrp">
										<input class="textfield" type="text" placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe') }}" />
									</div>

									<div class="row align-items-center justify-content-between">
										<div class="col-auto">
											<label class="checkfield align-bottom">
												<input type="checkbox" checked="">
												<i></i>
												
                                                {{ \App\Helpers\TranslationHelper::TranslateText('Se souvenir de moi') }}
											</label>
										</div>

										<div class="col-auto">
											<a class="link-forgot" href="#">
                                                {{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe oublié') }}?
                                            </a>
										</div>
									</div>

									<div class="d-table mt-8">
										<div class="d-table-cell align-middle">
											<button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button"> {{ \App\Helpers\TranslationHelper::TranslateText('Connexion') }}</button>
										</div>

										<div class="d-table-cell align-middle">
											<a class="link-to" href="#"> {{ \App\Helpers\TranslationHelper::TranslateText('S\'inscrire') }}</a>
										</div>
									</div>
								</form> --}}
								<!-- end form -->

								<div class="spacer py-6 d-md-none"></div>

							</div>

                            <div class="col-2 col-md-12 col-lg-6 col-xl-6 ">

                            </div>

						</div>
					</div>
				</section>
				<!-- end section -->

			</main>
			<!-- end main -->

        </main>


        @endsection
        