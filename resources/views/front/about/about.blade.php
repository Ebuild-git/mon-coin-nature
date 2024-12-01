@extends('front.fixe')
@section('titre', "A propos de nous")
@section('body')
    <main>
@php
    
    $config = DB::table('configs')->first();
@endphp



	<body>
		<div id="app">
		<br> <br>
			<!-- start hero -->
		
			<div  id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%" style="background-image: url('{{ $config->image_contact ? Storage::url($config->image_contact) : asset('img/home_img/default.jpg') }}');background-position: top 30% left 70%;">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>{{ \App\Helpers\TranslationHelper::TranslateText('A propos de notre boutique') }}</span> Mon Coin Nature</h1>

							
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

				<style>
					 .section--custom-01 {
 
	background-image: url('{{ Storage::url($config->image_apropos) }}');
    background-repeat: no-repeat;
    background-position: right ;
	background-size: 35%;


}
				</style>

				<!-- start section -->
				<section class="section section--no-pb section--custom-01">
					<div class="container">
						<div class="section-heading">
							<h2 class="__title"> <span>{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos ?? ' ') }}</span></h2>
						</div>

						<div class="row">
							<div class="col-6 col-lg-6 col-xl-8">
							
						

								<p>
									{{ \App\Helpers\TranslationHelper::TranslateText($config->des_apropos ?? '  ') }}


										</p>

								<p>
									<a class="custom-btn custom-btn--medium custom-btn--style-1"  href="{{ route('contact') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Nous contactez') }}</a>
								</p>
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section">
					<div class="container">
						<!-- start counters -->
						<div class="counter">
							<div class="__inner">
								<div class="row justify-content-sm-center">
									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="150">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="{{ Storage::url($config->icone1) }}" data-src="{{ Storage::url($config->icone1) }}" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="19500">19 500</p>

													<p class="__title">Produits</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="300">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="{{ Storage::url($config->icone2) }}" data-src="{{ Storage::url($config->icone2) }}" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="2720">2 720</p>

													<p class="__title">Produits en promotion</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="450">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="{{ Storage::url($config->icone3) }}" data-src="{{ Storage::url($config->icone3) }}" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="10000">10 000</p>

													<p class="__title">Familles de produits</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="600">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="{{ Storage::url($config->icone4) }}" data-src="{{ Storage::url($config->icone4) }}" alt="demo" />
												
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="128">128</p>

													<p class="__title">Rayons </p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end counters -->
					</div>
				</section>
				<!-- end section -->

			
				<!-- end section -->
			</main>
			<!-- end main -->

		
		</div>

		<div id="btn-to-top-wrap">
			<a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
		</div>



        
    </main>
    @endsection
    
