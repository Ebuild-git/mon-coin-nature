@extends('front.fixe')
@section('titre', 'Mes Favoris')
@section('body')

<main>
   {{--  <main class="main-wrapper"> --}}

        
        <div class="axil-wishlist-area axil-section-gap">
            <div class="container">
                <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%" style="background-image: url(img/intro_img/7.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <h1 class="__title"><span>Mon Coin Vert</span> {!! \App\Helpers\TranslationHelper::TranslateText('Mes favoris') !!}</h1>
        
                               {{--  <p>
                                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <main class="main-wrapper">
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
               {{--  <div class="product-table-heading">
                    <h4 class="title">
                        {{ \App\Helpers\TranslationHelper::TranslateText('List de mes favoris sur Ben Madmoud Market') }}
                    </h4>
                </div> --}}
                @livewire('Front.Favoris')
          
            </div>
        </div>
       
    </main>

</main>
@endsection
