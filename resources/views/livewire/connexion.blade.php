
{{-- 


<form   wire:submit='connexion' class="singin-form">
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
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" wire:model="email" placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Votre email') }}">
        @error('email')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-group position-relative">
        <label> {{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe') }}</label>
        <input 
            type="password" 
            id="password1" 
            class="form-control" 
            wire:model="password" 
            placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe') }}"
        >
        <span class="oeil">
            <i class="fas fa-eye-slash password-toggleregister"></i>
        </span>

        <style>
            .signup-item {
                position: relative;
            }

            .oeil {
                cursor: pointer;
                position: absolute;
                right: 20px;
                top: 20px;
            }
        </style>
     
        
        @error('password')
        <span class="text-danger small">
            {{ $message }}
        </span>
        @enderror
    </div>



<script>
    const passwordField = document.getElementById('password1');
    const toggleButton = document.querySelector('.password-toggleregister');

    toggleButton.addEventListener('click', function() {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            this.classList.remove('fa-eye-slash');
            this.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            this.classList.remove('fa-eye');
            this.classList.add('fa-eye-slash');
        }
    });
</script>
    

 
    <div class="form-group d-flex align-items-center justify-content-between">
        <button type="submit" class="axil-btn btn-bg-primary2 submit-btn">
            <span wire:loading>
                <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
            </span>
            <i class="ri-git-repository-private-line"></i>
            {{ \App\Helpers\TranslationHelper::TranslateText('Connexion') }}</button>
        <a href="{{ route('forgot_password') }}" class="forgot-btn"> {{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe oublié') }}?</a>
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
 --}}

<form wire:submit='connexion' class="auth-form" action="#">

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
    <div class=" input-wrp">
       
        <input class="textfield" wire:model="email" type="mail" placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Votre adresse mail') }} *" />
        @error('email')
        <span class="text-danger small">
            {{ $message }}
        </span>
    @enderror
    </div>

    <div class="input-wrp">
        <input class="textfield" 
        type="password" 
            id="password1" 
          
            wire:model="password" 
        
     placeholder=" {{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe') }}" />

  
      
      @error('password')
      <span class="text-danger small">
          {{ $message }}
      </span>
      @enderror
    </div>

    <div class="row align-items-center justify-content-between">
        <div class="col-auto">
            <label class="checkfield align-bottom">
                <input type="checkbox" checked="">
                <i></i>
                
                {{ \App\Helpers\TranslationHelper::TranslateText('Se souvenir de moi') }}
            </label>
        </div>

        <div class="col-auto">
            <a class="link-forgot" href="{{ route('forgot_password') }}">
                {{ \App\Helpers\TranslationHelper::TranslateText('Mot de passe oublié') }}?
            </a>
        </div>
    </div>

    <div class="d-table mt-8">
        <div class="d-table-cell align-middle">
           
            <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button"> {{ \App\Helpers\TranslationHelper::TranslateText('Connexion') }}

                <span wire:loading>
                    <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
                </span>
            </button>
        </div>

        <div class="d-table-cell align-middle">
            <a class="link-to"  href="{{ url('register') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('S\'inscrire') }}</a>
        </div>
    </div>
</form>


