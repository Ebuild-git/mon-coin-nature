@extends('front.fixe')
@section('titre', 'Paramètres ')
@section('body')

@php
$config = DB::table('configs')->first();
$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
@endphp



<main>

    <main class="main-wrapper">
   {{--     
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ \App\Helpers\TranslationHelper::TranslateText('Compte') }}</li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ \App\Helpers\TranslationHelper::TranslateText('Paramètres') }}</li>
                </ol>
            </nav>
        </div>
    </div> --}}

    <div  id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%" style="background-image: url('{{ $config->image_register ? Storage::url($config->image_register) : asset('img/home_img/default.jpg') }}');background-position: top 30% left 70%;">
    
   {{--  <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%" style="background-image: url(img/intro_img/7.jpg);">
    --}}     <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="__title"><span>Mon Coin Vert</span> {!! \App\Helpers\TranslationHelper::TranslateText('Mes paramètres') !!}</h1>

                   {{--  <p>
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                    </p> --}}
                </div>
            </div>
        </div>

      {{--   <main class="main-wrapper"> --}}
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
    </div>
        <div class="container-xl px-4 mt-4">
        <div class="row">

            <div class="col-xl-7">
                
                <div class=" mb-4">
                    <div class="card-header"> {{ \App\Helpers\TranslationHelper::TranslateText('Mon profile') }}</div>
                    <br>
                    <div class="">
                        @livewire('Profiles.Information')
                    </div>
                </div>
            </div>


            <div class="col">

                <div class="col-xl-24">
                   
                    <div class=" mb-4">
                        <div class="card-header primary">  {{ \App\Helpers\TranslationHelper::TranslateText('Sécurité') }}</div>
                        <br>
                        <div class="">
                            @livewire('Profiles.UpdateProfile')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            body {
             /*    margin-top: 20px; */
             /*    background-color: #f4f2fc; */
               /*  color: #69707a; */
            }

         
            .card {
                box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
            }

            .card .card-header {
                font-weight: 500;
            }

            .card-header:first-child {
                border-radius: 0.35rem 0.35rem 0 0;
            }

            .card-header {
                padding: 1rem 1.35rem;
                margin-bottom: 0;
              
                 background-color: #b2e21522;
               /*  background-color: rgba(239, 134, 14, 0.03); */
                border-bottom: 1px solid rgba(221, 119, 23, 0.125);
            }
            
            .form-control,
            .dataTable-input {
                display: block;
                width: 100%;
                padding: 0.875rem 1.125rem;
                font-size: 0.875rem;
                font-weight: 400;
                line-height: 1;
                color: #e4e9ee;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #c5ccd6;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: 0.35rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

          /*   .nav-borders .nav-link.active {
                color: #1a69e0;
                border-bottom-color: #0061f2;
            } */

            .nav-borders .nav-link {
                color: #0b0b0b;
                border-bottom-width: 0.125rem;
                border-bottom-style: solid;
                border-bottom-color: transparent;
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
                padding-left: 0;
                padding-right: 0;
                margin-left: 1rem;
                margin-right: 1rem;
            }
        </style>
       
    </div> 

</main>
    <br>
</main>


@endsection

<!-- error area end -->