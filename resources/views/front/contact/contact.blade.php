@extends('front.fixe')
@section('titre', "Contact")
@section('body')
    <main>

		@php
$config = DB::table('configs')->first();
$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
@endphp

<br><br> <br>
        <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%" style="background-image: url(img/intro_img/7.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h1 class="__title"><span>Mon Coin Vert</span> {!! \App\Helpers\TranslationHelper::TranslateText('Nous contactez') !!}</h1>

                       {{--  <p>
                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>




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
					<div class="container">
						<!-- start company contacts -->
						<div class="company-contacts  text-center">
							<div class="__inner">
								<div class="row justify-content-around">
									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-location"></i>

											<h4 class="__title"> {!! \App\Helpers\TranslationHelper::TranslateText('Adresse') !!}</h4>

											<p>
											{{ $config->addresse ?? ' ' }}
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-phone"></i>

											<h4 class="__title"> {!! \App\Helpers\TranslationHelper::TranslateText('Téléphone') !!}</h4>

											<p>
												{{ $config->telephone ?? ' '  }}<br>
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-mail-1"></i>

											<h4 class="__title"> {!! \App\Helpers\TranslationHelper::TranslateText('E-mail') !!}</h4>

											<p>
												<a href="mailto:support@agrocompany.com">{{ $config->email ?? ' ' }}</a></p>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end company contacts -->
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--dark-bg  section--contacts">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-12 col-md-6">

								<div class="row justify-content-end">
									<div class="col-md-11">
										<div class="section-heading section-heading--white">
											<h2 class="__title"><span>{{ \App\Helpers\TranslationHelper::TranslateText("Laissez le message") }}</span></h2>

											{{-- <p> {{ \App\Helpers\TranslationHelper::TranslateText('Si vous des excellents produits que vous fabriquez ou vous souhaitez travaillez avec nous, envoyez-nous un message') }}
											</p> --}}
										</div>

										@livewire('Front.ContactForm')

									
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="row no-gutters">
						<div class="col-md-6  map-container map-container--left">
							<!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
							<div class="g_map" data-api-key="AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" data-longitude="44.958309" data-latitude="34.109925" data-marker="img/marker.png" style="min-height: 255px"></div>
						</div>
					</div>
				</section>
				<!-- end section -->
			</main>
			<!-- end main -->
<br>
<br>

    </main>
@endsection
