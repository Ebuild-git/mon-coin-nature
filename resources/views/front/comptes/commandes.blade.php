@extends('front.fixe')
@section('titre', 'Mes commandes ')
@section('body')
@php
$config = DB::table('configs')->first();
$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
@endphp

<main>
    
			<div  id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%" style="background-image: url('{{ $config->image_register ? Storage::url($config->image_register) : asset('img/home_img/default.jpg') }}');background-position: top 30% left 70%;">
    
    {{-- <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%" style="background-image: url(img/intro_img/7.jpg);">
    --}}     <div class="container">
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
<div class="page-content-wrapper">
    <div class="page-content">
        <section class="cart-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    {{--     @livewire('Front.Favoris') --}}
                   {{--  @livewire('Commandes.MesCommandes') --}}
                   <div>
                    <div id="content">
                        <br><br>
                        <div class="wishlist">
                            <div class="container">
                                <div class="wishlist__table">
                                    <div class="wishlist__table__wrapper">
                                        <table>
                                            <colgroup>
                                                <col style="width: 20%" />
                                                <col style="width: 10%" />
                                               
                                                <col style="width: 15%" />
                                                <col style="width: 10%" />
                                                <col style="width: 20%" />
                                            </colgroup>
                                            <thead  style=" background-color: #b2e21522;">
                                                <tr>
                                                    <th style="width: 80px;"> {{ \App\Helpers\TranslationHelper::TranslateText('Article') }}</th>
                                                    <th class="product-thumbnail"> {{ \App\Helpers\TranslationHelper::TranslateText('Montant') }}</th>
                                                    <th class="product-thumbnail"> {{ \App\Helpers\TranslationHelper::TranslateText('Frais') }}</th>
                                                   
                                                    <th class="product-thumbnail"> {{ \App\Helpers\TranslationHelper::TranslateText('Date') }}</th>
                                                    <th class="product-quantity"> {{ \App\Helpers\TranslationHelper::TranslateText('Status') }}</th>
                                                    <th class="product-remove">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($commandes as $key => $commande)
                                                                <tr>
                                                                    <td>
                                                                       
                                                                        {{ $commande->contenus->count() }}
                                                                    </td>
                                                                    <td >
                                                                        {{ $commande->montant() }} DT
                                                                    </td>
                                                                    <td>
                                                                        {{ $commande->frais ?? 0}} DT
                                                                    </td>
                                                                    <td>
                                                                        {{ $commande->created_at }}
                                                                       
                                                                    </td>
                                                                    <td>
                                                                        
                                                                        {{ $commande->statut }}
                                                                    </td>
                                                                    <td>
                                                                       {{--  <a href="{{ route('print_commande',['id'=> $commande->id ]) }}" class="btn2 btn-sm btn-dark2">
                                                                            <img width="20" height="20" src="https://img.icons8.com/wired/20/FFFFFF/bill.png" alt="bill"/>
                                                                            Facture
                                                                        </a> --}}

                                                                        <a  href="{{ route('print_commande',['id'=> $commande->id ]) }}" class="axil-btn btn-bg-primary2">
                                                                            
                                                                            <img width="20" height="20" src="https://img.icons8.com/wired/20/FFFFFF/bill.png" alt="bill"/>
                                                                            Facture</a>
                                                                    </td>
                                                                   
                                                                </tr>
                                                            @empty
                                                            <tr>
                                                                <td colspan="6 ">
                                                                    
                                                                    <div class="text-center p-5"><img width="50" height="50" src="https://img.icons8.com/?size=100&id=15867&format=png&color=000000" alt="shopping-cart--v1"/>
                                                                        <br>
                                                                        <h5>
                                                                        Pas de  commandes enregistrées pour l'instant.
                                                                        </h5>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                            </tbody>
                                        </table>
                                    </div>   <style>
                                        .btn2 {
                                            background-color: #5EA13C;
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
                                </div>
                            </div>
                        </div>
                </div>
                
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



</main>

@endsection
