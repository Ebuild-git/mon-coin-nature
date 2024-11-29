
<form class="auth-form" wire:submit="save">
    <div class="input-wrp">
        <input class="textfield" wire:model="nom" name="nom" type="text" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre nom') }} *" />
    </div>

    <div class="input-wrp">
        <input class="textfield" wire:model="email" name="email" type="email" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre Email') }} *" />
    </div>

    <div class="input-wrp">
        <input class="textfield"  wire:model="password" id="password1" type="password" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe') }}" />
    </div>

    <div class="input-wrp">
        <input class="textfield"  wire:model="password_confirmation" type="password" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Confirmation de mot de passe') }}" />
    </div>

    <div class="d-table mt-8">
        <div class="d-table-cell align-middle">
            <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button">
                <span wire:loading>
                    <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
                </span>
                <span>
                {{ \App\Helpers\TranslationHelper::TranslateText('Confirmation') }}</button>
        </div>

        <div class="d-table-cell align-middle">
            <a class="link-to" href="{{ url('login') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Se connecter') }}</a>
        </div>
    </div>


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
        background-color: #EFB121; 
        color: #ffffff; 
        border: none;
        padding: 10px 20px; 
        border-radius: 5px; 
        text-decoration: none; 
    }
    </style>
</form>