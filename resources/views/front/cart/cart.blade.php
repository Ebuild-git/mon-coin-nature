@extends('front.fixe')
@section('titre', 'Mon panier')
@section('body')
    <main>
        {{-- <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#"> {{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
                      <li class="breadcrumb-item active" aria-current="page"> {{ \App\Helpers\TranslationHelper::TranslateText('Boutique') }}</li>
                      <li class="breadcrumb-item active" aria-current="page"> {{ \App\Helpers\TranslationHelper::TranslateText('Mon panier') }}</li>
                    </ol>
                  </nav>
            </div>
        </div> --}}

        	<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url(img/intro_img/12.jpg);color: #333;">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7">
                            <br><br>
							<h1 class="__title"> {{ \App\Helpers\TranslationHelper::TranslateText('Mon panier') }}</h1>

						
						</div>
					</div>
				</div>
			</div>
        <!-- Cart area start-->
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

					<div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="99" height="88" src="img/blank.gif" data-src="img/decor-el_2.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="115" height="117" src="img/blank.gif" data-src="img/decor-el_3.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="84" height="76" src="img/blank.gif" data-src="img/decor-el_4.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="248" height="309" src="img/blank.gif" data-src="img/decor-el_5.jpg" alt="demo"/>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- start cart -->
                                @livewire('Front.Panier')

								<!-- start cart -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

			
				<!-- end section -->
			</main>
    </main>
@endsection
