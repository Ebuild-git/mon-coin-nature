<div>

    @livewireStyles
    @if (session()->has('error'))
        <div class="alert alert-danger p-3 small">
            {{ session('error') }}
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success p-3 small">
            {{ session('success') }}
        </div>
    @endif




    <form wire:submit="save" class="contact-form js-contact-form" action="#">
    
        <div class="input-wrp">
            <input class="textfield"  wire:model="nom" type="text" id="nom" name="name" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre nom') }}" />
            @error('nom')
            <span class="small text-danger">
                {{ $message }}
            </span>
        @enderror
        </div>

        <div class="input-wrp">
            <input class="textfield"  wire:model="email" type="email" id="email" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre mail') }}" />
            @error('email')
            <span class="small text-danger">
                {{ $message }}
            </span>
        @enderror
        </div>

        <div class="input-wrp">
            <input class="textfield"wire:model="sujet" type="text" id="sujet" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Sujet') }}" />
            @error('sujet')
            <span class="small text-danger">
                {{ $message }}
            </span>
        @enderror
        </div>

        <div class="input-wrp">
            <textarea class="textfield" wire:model="message" rows="10" cols="30" id="message" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre message') }}"></textarea>
            @error('message')
            <span class="small text-danger">
                {{ $message }}
            </span>
        @enderror
        </div>

        <button class="custom-btn custom-btn--medium btn-bg-secondary2 wide" type="submit" role="button">
            <span wire:loading>
                <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
            </span>
            {{ \App\Helpers\TranslationHelper::TranslateText('Envoyer') }}</button>

        <div class="form__note"></div>
    </form>


    
    <style>
        .btn-bg-primary2 {
            background-color: #5EA13C;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    
        .btn-bg-secondary2 {
        background-color: #009640; /* Couleur de fond, bleu dans cet exemple */
        color: #ffffff; /* Couleur du texte, blanc dans cet exemple */
        border: none;
        padding: 10px 20px; /* Optionnel, ajuste la taille */
        border-radius: 5px; /* Optionnel, arrondit les coins */
        text-decoration: none; /* Supprime le soulignement */
    }
    </style>

</div>
