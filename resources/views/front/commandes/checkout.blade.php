@extends('front.fixe')
@section('titre', 'Paiement')
@section('body')
    <main>

        <!-- start hero -->
        <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%"
            style="background-image: url(img/intro_img/14.jpg);color: #333;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="__title"><span>Agro Shop</span> Checkout</h1>

                        <p>
                            The point of using is that it has a more-or-less normal distribution of letters, as opposed to
                            using Content here content here making it look
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hero -->


        <!-- Common styles
        ================================================== -->
        <link rel="stylesheet" href="css/style.min.css" type="text/css">

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
                <img class="lazy" width="286" height="280" src="img/blank.gif" data-src="img/decor-el_1.jpg"
                    alt="demo" />
            </div>

            <div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="99" height="88" src="img/blank.gif" data-src="img/decor-el_2.jpg"
                    alt="demo" />
            </div>

            <div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="115" height="117" src="img/blank.gif" data-src="img/decor-el_3.jpg"
                    alt="demo" />
            </div>

            <div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="84" height="76" src="img/blank.gif" data-src="img/decor-el_4.jpg"
                    alt="demo" />
            </div>

            <div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="248" height="309" src="img/blank.gif" data-src="img/decor-el_5.jpg"
                    alt="demo" />
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- start checkout -->
                        <div class="checkout">
                            <h2>BILLING <span>DETAILS</span></h2>

                            <div class="spacer py-3"></div>


                            <form class="checkout__form" action="{{ route('order.confirm') }}" method="post">
                                @if ($errors->any())
                                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                                @endif
                                @csrf
                                <div class="row justify-content-xl-between">
                                    <div class="col-12 col-md-5 col-lg-6">
                                        <div>
                                            <h6> {{ \App\Helpers\TranslationHelper::TranslateText('Informations personnelles') }}
                                            </h6>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="input-wrp">
                                                    <input class="textfield" name="nom"
                                                        @if (Auth::user()) value="{{ Auth::user()->nom }}" @endif
                                                        placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Votre nom') }} *"
                                                        type="text" required />
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="input-wrp">
                                                    <input class="textfield" name="prenom"
                                                        @if (Auth::user()) value="{{ Auth::user()->prenom }}" @endif
                                                        placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Prénom') }} *"
                                                        type="text" required />
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="input-wrp">
                                                    <input type="mail" name="email" class="textfield"
                                                        @if (Auth::user()) value="{{ Auth::user()->email }}" @endif
                                                        required />
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="input-wrp">
                                                    <input type="number" name="phone" class="textfield" required />
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="input-wrp">
                                                    <input type="text" name="adresse" class="textfield"
                                                        placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Votre adresse') }}"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="spacer py-6"></div>



                                        <div class="row">



                                            <div class="col-12">
                                                <div class="input-wrp">
                                                    <select class="textfield" type="text" name="gouvernorat"
                                                        id="Region">
                                                        <option value="">
                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Gouvernorat') }}
                                                        </option>
                                                        @foreach ($gouvernorats as $gouvernorat)
                                                            <option value="{{ $gouvernorat }}">
                                                                {{ $gouvernorat }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-wrp">
                                                    <textarea id="message" name="message" class="textfield"
                                                        placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Note sur votre commande(Optionnel)') }}""></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="spacer py-6 d-md-none"></div>
                                    </div>

                                    <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                                        <div>
                                            <h6>{{ \App\Helpers\TranslationHelper::TranslateText('Votre commande') }}</h6>
                                        </div>

                                        <div class="checkout__table">
                                            <table>
                                                <tbody>
                                                    @foreach ($paniers as $id => $details)
                                                        <tr>
                                                            <td width="65%">
                                                                <div class="d-table">
                                                                    <div class="d-table-cell align-middle">
                                                                        <figure class="__image">
                                                                            <a href="#">
                                                                                <img class="lazy"src="{{ Storage::url($details['photo']) }}"
                                                                                    data-src="{{ Storage::url($details['photo']) }}"
                                                                                    alt="demo" />
                                                                            </a>
                                                                        </figure>
                                                                    </div>

                                                                    <div class="d-table-cell align-middle">
                                                                        <a href="#"
                                                                            class="__name">{{ $details['nom'] }}</a>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <span class="__amount">x{{ $details['quantite'] }}</span>
                                                            </td>

                                                            <td width="1%">
                                                                <span class="__total">{{ $total }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>



                                            </table>
                                        </div>



                                        <div class="checkout__total">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h3> {{ \App\Helpers\TranslationHelper::TranslateText('Votre') }}
                                                                <span>
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('commande') }}</span>
                                                            </h3>
                                                        </td>
                                                    </tr>
                                                </thead>

                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2" class="__note">
                                                            <p class="__ttl">Les moyens de Payements</p>

                                                            <div class="content">
                                                                <div class="checkbox">
                                                                    {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                                                    <form-group>
                                                                        <input name="mode" type="radio"
                                                                            value="livraison"> <label>Payement à la
                                                                            livraison</label><br><br>

                                                                        <input name="mode" type="radio"
                                                                            value="solde"> <label> Payement avec le solde
                                                                        </label>
                                                                    </form-group>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2">
                                                            {{-- <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
 --}}
                                                            <button
                                                                class="custom-btn custom-btn--medium custom-btn--style-1"
                                                                type="submit"
                                                                role="button">{{ \App\Helpers\TranslationHelper::TranslateText('Confirmation') }}</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                    <tr>
                                                        <td>Total:</td>
                                                        <td>{{ $total }} DT</td>
                                                    </tr>

                                                    <tr>
                                                        <td>{{ \App\Helpers\TranslationHelper::TranslateText('Frais de livraison') }}
                                                        </td>




                                                  

                                                        <td>

                                                            <div class="form-group">
                                                                <label for="transport">Sélectionnez:</label>
                                                                <select name="tranport_id" id="transport"
                                                                    class="form-control">
                                                                    @foreach ($transports as $transport)
                                                                        <option value="{{ $transport->id }}">
                                                                            {{ $transport->ville }} -
                                                                            {{ $transport->frais }} DT
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>




                                                  



                                                    </tr>
                                                    {{-- <tr>
                                                                <td>{{ \App\Helpers\TranslationHelper::TranslateText('Coupon de réduction') }}</td>
                                                                <td>-{{ session('coupon')['value'] ?? 0 }}
                                                                    DT</td>
                                                            </tr>
 --}}
                                                    {{-- <tr>
																<td>Total</td>
																<td>{{ $total  }} DT</td>
															</tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end checkout -->

                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>

@endsection
