@extends('front.fixe')
@section('titre', "Félicitation pour votre commande")
@section('body')

<main> 
    <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url(img/intro_img/14.jpg);color: #333;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="__title"><span>Agro Shop</span> Checkout</h1>
    
                    <p>
                        The point of using is that it has a more-or-less normal distribution of letters, as opposed to using Content here content here making it look
                    </p>
                </div>
            </div>
        </div>
    </div>


				<link rel="stylesheet" href="css/style.min.css" type="text/css">

			
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
                <div class="col-ms-6 mx-auto">
                    <div class="mt-5 mb-5">
                        <div class="card-body card-bodyx text-center ">
                            <h5 class="text-success">
                                <div>
                                  {{--   
                                    <img width="96" height="96" src="https://img.icons8.com/pulsar-line/96/578b07/order-completed.png" alt="order-completed"/>
                              --}} 
                              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150" height="150" viewBox="0 0 48 48">
                                <linearGradient id="5zzMGVQnN_QyRYWGmJUsQa_A8xKzsTKHhzn_gr1" x1="9.858" x2="38.142" y1="9.858" y2="38.142" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#21ad64"></stop><stop offset="1" stop-color="#088242"></stop></linearGradient><path fill="url(#5zzMGVQnN_QyRYWGmJUsQa_A8xKzsTKHhzn_gr1)" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path><path d="M32.172,16.172L22,26.344l-5.172-5.172c-0.781-0.781-2.047-0.781-2.828,0l-1.414,1.414	c-0.781,0.781-0.781,2.047,0,2.828l8,8c0.781,0.781,2.047,0.781,2.828,0l13-13c0.781-0.781,0.781-2.047,0-2.828L35,16.172	C34.219,15.391,32.953,15.391,32.172,16.172z" opacity=".05"></path><path d="M20.939,33.061l-8-8c-0.586-0.586-0.586-1.536,0-2.121l1.414-1.414c0.586-0.586,1.536-0.586,2.121,0	L22,27.051l10.525-10.525c0.586-0.586,1.536-0.586,2.121,0l1.414,1.414c0.586,0.586,0.586,1.536,0,2.121l-13,13	C22.475,33.646,21.525,33.646,20.939,33.061z" opacity=".07"></path><path fill="#fff" d="M21.293,32.707l-8-8c-0.391-0.391-0.391-1.024,0-1.414l1.414-1.414c0.391-0.391,1.024-0.391,1.414,0	L22,27.758l10.879-10.879c0.391-0.391,1.024-0.391,1.414,0l1.414,1.414c0.391,0.391,0.391,1.024,0,1.414l-13,13	C22.317,33.098,21.683,33.098,21.293,32.707z"></path>
                                </svg>
              
                            
                            </div>
                                <b>
                                 <h3>  
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Félicitation pour votre commande') }} !
                                    </h3>  
                                </b>
                            </h5>
                            
                            <p>
                                <h3> 
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Votre commande a été enregistrée avec succès') }}
                                </h3>
                            </p>
                           
                    
                            <style>
                                .btn-small-width {
                                    width: 300px; 
                                }
                            </style>
                            
                            <div class="form-group mb--0">
                                <a href="/shop" class="axil-btn btn-bg-primary2 btn-small-width">
                                    <span> 
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Continuer les achats') }}
                                    </span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>

        <style>
            .btn-bg-primary2 {
                background-color: #009640;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
            }
    
            .btn-bg-secondary2 {
            background-color: #EFB121; /* Couleur de fond, bleu dans cet exemple */
            color: #ffffff; /* Couleur du texte, blanc dans cet exemple */
            border: none;
            padding: 10px 20px; /* Optionnel, ajuste la taille */
            border-radius: 5px; /* Optionnel, arrondit les coins */
            text-decoration: none; /* Supprime le soulignement */
        }
        </style>
    </main>

    <style>
        .card-bodyx{
            margin-bottom: 20px;
            margin-top: 20px;
        }
    </style>
@endsection
