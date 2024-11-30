@php

$configs = DB::table('configs')->first();
@endphp


<div class="cart">
    <form class="cart__form" action="#">
        <div class="cart__table">
            <table>
                <thead>
                    <tr>
                        <td width="10%">&nbsp;</td>
                        <td width="35%">{{ \App\Helpers\TranslationHelper::TranslateText('Produit') }}</td>
                        <td width="15%">{{ \App\Helpers\TranslationHelper::TranslateText('Coût') }}</td>
                        <td width="20%">{{ \App\Helpers\TranslationHelper::TranslateText('Quantité') }}</td>
                        <td width="15%">SubTotal</td>
                        <td width="5%">&nbsp;</td>

                    </tr>
                </thead>

                <tbody>
                    @forelse ($paniers ?? [] as $id => $details)
                    <tr data-id="{{ $id }}">
                        <td>
                            <figure class="__image">
                                <a href="{{ route('details-produits', ['id' => $details['id_produit'], 'slug'=>Str::slug(Str::limit($details['nom'], 10))]) , }}">
                                    <img class="lazy" src="{{ Storage::url($details['photo']) }}" data-src="{{ Storage::url($details['photo']) }}" alt="demo" />
                                </a>
                            </figure>
                        </td>

                        <td>
                            <a href="{{ route('details-produits', ['id' => $details['id_produit'], 'slug'=>Str::slug(Str::limit($details['nom'], 10))]) , }}" class="__name">{{ $details['nom'] }}</a>
                        </td>

                        <td>
                            <span class="__price"> {{ $details['prix'] }} DT</span>
                        </td>

                        <td>
                            <div class="quantity-counter js-quantity-counter">
                                <span class="__btn __btn--minus"></span>
                                {{-- <input class="__q-input" type="text" value="1" /> --}}
                                <input type="number" value="{{ $details['quantite'] }}" min="0" wire:change="update({{ $details['id_produit'] }}, $event.target.value)" class="__q-input" autocomplete="off">

                                <span class="__btn __btn--plus"></span>
                            </div>
                        </td>

                        <td>
                            <span class="__total"> {{ $details['prix'] * $details['quantite'] }}
                                DT</span>
                        </td>

                        <td>
                            <a class="__remove" wire:click="delete({{ $details['id_produit'] }})" aria-label="Remove this item">
                                <i class="fontello-cancel"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <div class="text-center p-5">
                                <img width="64" height="64" src="https://img.icons8.com/pastel-glyph/64/578b07/shopping-cart--v2.png" alt="shopping-cart--v2" /><br>

                                <h6>

                                    {{ \App\Helpers\TranslationHelper::TranslateText('Vous n\'avez pas de produits au panier') }}
                                </h6>
                                <br>

                            </div>
                        </td>
                    </tr>
                    @endforelse


                </tbody>
            </table>
        </div>

        <div class="py-5"></div>

        <div class="row justify-content-md-between">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="col-12 col-md-6">


                {{-- <form action="{{ route('apply.coupon') }}" method="POST">
                    @csrf
                    <div class="cart__coupon form--horizontal">
                        <div class="input-wrp">

                            <input class="textfield" type="text" name="code" placeholder="Entrez le code ">
                        </div>


                        <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit">Appliquer</button>
                    </div>
                </form> --}}

            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="spacer py-5 d-md-none"></div>

                <div class="cart__total">
                    <table>
                        <thead>
                            <tr>
                                <td colspan="2">
                                    <h3> <span>{{ \App\Helpers\TranslationHelper::TranslateText('TOTAL CART') }}</span></h3>
                                </td>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    {{-- <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#">Proceed to checkout</a> --}}
                                    @if ($total > 0)
                                    <a class="axil-btn btn-bg-primary2 checkout-btn" href="{{ url('/commander') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Passer le commande') }}</a>
                                    @endif
                                </td>
                            </tr>
                        </tfoot>

                        <tbody>
                            @if ($total > 0)
                            {{-- <tr>
                                <td>Subtotal:</td>
                                <td>{{ $total }} DT</td>
                            </tr> --}}

                           {{--  <tr>
                                <td> {{ \App\Helpers\TranslationHelper::TranslateText('Frais de livraison') }}</td>
                                <td>{{ $configs->frais ?? 0 }}
                                    DT</td>
                            </tr> --}}

                            <tr>
                                <td>Total</td>
                                <td>{{ $total  }} DT</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>

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
            background-color: #EFB121;
            /* Couleur de fond, bleu dans cet exemple */
            color: #ffffff;
            /* Couleur du texte, blanc dans cet exemple */
            border: none;
            padding: 10px 20px;
            /* Optionnel, ajuste la taille */
            border-radius: 5px;
            /* Optionnel, arrondit les coins */
            text-decoration: none;
            /* Supprime le soulignement */
        }

    </style>
</div>
