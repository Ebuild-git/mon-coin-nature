@extends('front.fixe')
@section('titre', 'Shop')
@section('body')


    <main>
        @php
            $config = DB::table('configs')->first();
            $service = DB::table('services')->get();
            $produit = DB::table('produits')->get();
        @endphp
	<body class="woocommerce-page catalog-page">
		<div id="app">
			<!-- start header -->
			<!-- start hero -->
            <br>
            <br>
            <br>
            <br>
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url(img/intro_img/12.jpg);color: #333;">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7">
							<h1 class="__title"><span>Mon Coin Nature</span> {{ __('boutique') }}</h1>
<p>
	{{ \App\Helpers\TranslationHelper::TranslateText('Explorez tous les produits') }}
</p>
							{{-- <p>
								The point of using is that it has a more-or-less normal distribution of letters, as opposed to using Content here content here making it look
							</p> --}}
						</div>
					</div>
				</div>
			</div>

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

				<!-- start section -->
				<section class="section">
					<div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="286" height="280" src="/img/blank.gif" data-src="/img/decor-el_1.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="99" height="88" src="/img/blank.gif" data-src="/img/decor-el_2.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="115" height="117" src="/img/blank.gif" data-src="/img/decor-el_3.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="84" height="76" src="/img/blank.gif" data-src="/img/decor-el_4.jpg" alt="demo"/>
					</div>

					<div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
						<img class="lazy" width="248" height="309" src="/img/blank.gif" data-src="/img/decor-el_5.jpg" alt="demo"/>
					</div>

					<div class="container">

						<!-- start goods catalog -->
						<div class="goods-catalog">
							<div class="row">
								<div class="col-12 col-md-4 col-lg-3">
									<aside class="sidebar goods-filter">
										<span class="goods-filter-btn-close js-toggle-filter"><i class="fontello-cancel"></i></span>

										<div class="goods-filter__inner">
											<!-- start widget -->
											<div class="widget widget--search">
												<form class="form--horizontal" role="search" action="{{ url('search') }}" method="get">
													<div class="input-wrp">
														<input value="{{ $nom ?? '' }}" class="textfield" id="search" type="search" name="search" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Rechercher produit') }}" />
													</div>

													<button class="custom-btn custom-btn--tiny custom-btn--style-1" type="submit" role="button">{{ \App\Helpers\TranslationHelper::TranslateText('Rechercher') }}</button>
												</form>
											</div>
											<!-- end widget -->

											<!-- start widget -->
											<div class="widget widget--categories">
												<h4 class="h6 widget-title"> {{ \App\Helpers\TranslationHelper::TranslateText('RAYONS') }}</h4>

												<ul class="list">
													@foreach ($categories as $category)
													<li class="list__item">
														<a class="list__item__link"  href="/category/{{ $category->id }}"
                                                            class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">  {{ \App\Helpers\TranslationHelper::TranslateText( Str::limit($category->nom, 25)) }}</a>
														<span>({{ $category->produits->count() }})</span>
													</li>
													@endforeach

												
												</ul>
											</div>
											<!-- end widget -->

											<!-- start widget -->
											<div class="widget widget--price">
												{{-- <h4 class="h6 widget-title">Price</h4> --}}

												<div>
													{{-- <input type="text" class="js-range-slider" name="my_range" value=""
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
													/> --}}

													<div class="row">
														<div class="col-6">
														{{-- 	<input class="range-slider-min-value" type="text" value="48" name="min-value" readonly="readonly">
												 --}}		</div>

														<div class="col-6">
														{{-- 	<input class="range-slider-max-value" type="text" value="365" name="max-value" readonly="readonly">
												 --}}		</div>
													</div>
												</div>
											</div>
											<!-- end widget -->

											<!-- start widget -->
											<div class="widget widget--additional">
												<h4 class="h6 widget-title">{{ \App\Helpers\TranslationHelper::TranslateText('Familles') }}</h4>

												<ul>
													@foreach ($marques as $marque)
													<li>
														<label class="checkfield">
															<input type="checkbox" checked/>
															<i></i>
															{{ $marque->nom }}
														</label>
													</li>
													@endforeach

												</ul>
											</div>
											<!-- end widget -->

											<!-- start widget -->
											{{-- <div class="widget widget--tags">
												<h4 class="h6 widget-title">Popular Tags</h4>

												<ul>
													<li><a href="#">Art</a></li>
													<li><a href="#">design</a></li>
													<li><a href="#">concept</a></li>
													<li><a href="#">Media</a></li>
													<li><a href="#">Photography</a></li>
													<li><a href="#">UI</a></li>
												</ul>
											</div> --}}
											<!-- end widget -->

											<!-- start widget -->
											<div class="widget">
												<div class="row no-gutters align-items-center">
													{{-- <div class="col">
														<button class="custom-btn custom-btn--medium custom-btn--style-1" role="button">Show Products</button>
													</div> --}}

													{{-- <div class="col-auto">
														<a class="clear-filter" href="#">Clear all</a>
													</div> --}}
												</div>
											</div>
											<!-- end widget -->

											<!-- start widget -->
											<div class="widget widget--products">
												<h4 class="h6 widget-title">{{ \App\Helpers\TranslationHelper::TranslateText('Les 5 dernières publication') }}</h4>
												@php
												$lastproduits= DB::table('produits')->latest()->take(5)->get();
											@endphp
												<ul>
													@foreach ($lastproduits as $produit) 
													<li>
														<div class="row no-gutters">
															<div class="col-auto __image-wrap">
																<figure class="__image">
																	<a href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
																		<img class="lazy" src="{{ Storage::url($produit->photo) }}" data-src="{{ Storage::url($produit->photo) }}" alt="demo" />
																	</a>
																</figure>
															</div>

															<div class="col">
																<h4 class="h6 __title"><a href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ \App\Helpers\TranslationHelper::TranslateText( $produit->nom ?? ' ' ) }}</a></h4>

															

																<div class="product-price">
																	<span class="product-price__item product-price__item--new">  {{ $produit->prix }} DT</span>
																	{{-- <span class="product-price__item product-price__item--old">  {{ $produit->prix }} DT</span> --}}
																</div>
															</div>
														</div>
													</li>
													@endforeach

												
												</ul>
											</div>
											<!-- end widget -->

											<!-- start widget -->

											@php
												$lastproduit= DB::table('produits')->latest()->take(1)->get();
											@endphp
											<div class="widget widget--banner">
												@foreach ($lastproduit as $produit) 
												<a href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}"><img class="img-fluid  lazy" src="{{ Storage::url($produit->photo) }}" data-src="{{ Storage::url($produit->photo) }}" alt="demo" /></a>
											@endforeach
											</div>
											<!-- end widget -->
										</div>
									</aside>
								</div>

								<div class="col-12 col-md-8 col-lg-9">
									<div class="spacer py-6 d-md-none"></div>

									<div class="row align-items-center justify-content-between">
										<div class="col-auto">
											<span class="goods-filter-btn-open js-toggle-filter"><i class="fontello-filter"></i>{{ \App\Helpers\TranslationHelper::TranslateText('Filtrer') }}</span>
										</div>

										<div class="col-auto">
											<!-- start ordering -->
											<form class="ordering" action="#">
												<div class="input-wrp">
													<select class="textfield wide js-select single-select"
													name="sort_by" id="sort_by"
                                                    onchange="window.location.href=this.value;">
														<option value="{{ url('shop') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Défaut') }}</option>
                                                    <option value="{{ url('croissant') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Croissant') }}</option>

                                                    <option value="{{ url('decroissant') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Décroissant') }}</option>
                   
													</select>
												</div>
											</form>
											<!-- end ordering -->
										</div>
									</div>

									<div class="spacer py-3"></div>

									<!-- start goods -->
									<div class="goods goods--style-1">
										<div class="__inner">
											<div class="row">
												<!-- start item -->
												@if ($produits)

												@foreach ($produits as $key => $produit)
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image">
															<img class="lazy" width="188" src="{{ Storage::url($produit->photo) }}" data-src="{{ Storage::url($produit->photo) }}" alt="demo" />
														</figure>

														<div class="__content">
															<h4 class="h6 __title"><a  href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ $produit->nom }}</a></h4>

														
															<div class="product-price">
																<span class="product-price__item product-price__item--new">
	
																	@if ($produit->inPromotion())
                                                   
                                                      

																	<span class="product-price__item product-price__item--new">
																		{{ $produit->getPrice() }} DT
																	</span>
															  
				
															  
																
				
																		<span class="product-price__item product-price__item--old">
																		   {{ $produit->prix }} DT
																		</span>
				
				
																
															 
																@endif
																</span>
															</div>

															<a class="custom-btn custom-btn--medium custom-btn--style-1"  onclick="AddToCart( {{ $produit->id }} )"><i class="fontello-shopping-bag"></i> {{ \App\Helpers\TranslationHelper::TranslateText('Ajouter au panier') }}</a>
														</div>
														@if ($produit->inPromotion())
														<span class="product-label product-label--sale"> -{{ $produit->inPromotion()->pourcentage }}%</span>
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

									<div class="spacer py-5"></div>

									<!-- start pagination -->
									<nav aria-label="Page navigation example">
										<ul class="pagination justify-content-center">
											{{ $produits->links('pagination::bootstrap-4') }}	
										</ul>
									</nav>
									<!-- end pagination -->
								</div>
							</div>
						</div>
						<!-- end goods catalog -->

					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
			
				<!-- end section -->
			</main>
			<!-- end main -->


</main>
@endsection
