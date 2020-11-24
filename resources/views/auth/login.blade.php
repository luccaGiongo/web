
@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('content')
@section('title','IFFAR - Repositorio')
<style>
    input{
        height: 5% !important;

    }

    body {
        background-image: url(img/img-fundo-login.jpg);
        font: normal arial;
    }

    h2 {
        color: rgb(70, 172, 70);
    }
</style>

{{-- <body class="text-center bg-success"> --}}
    @include('admin.pages.sistemas_internet._partials.cabecalho')

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <h2>Repositório IFFAR</h2>
                <h1>Campus Panambi</h1>
            </div>

            <div class="card">          
                <div class="card-body">
            <form method="POST" class="" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    {{-- <label for="email" class="col-md-4 col-form-label"></label> --}}

                    <div class="form-group ">

                        <input id="email" type="text" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="usuario" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                        <input id="password" placeholder="Senha" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                {{-- </div>
                <div class="form-group ">
                    
                        <input id="usuario" type="text" placeholder="Usuario" class=" text-black @error('usuario') inválido @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="email" autofocus>

                        @error('usuario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
                <div class="form-group ">
                    <input id="password" type="password" placeholder="Senha" class="text-black @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}
                    
                            {{-- </div> --}}
                            {{-- </div> --}}
                            {{-- </div> --}}
                            <div class="form-group ">
                            </div>
                            <button type="submit"   class="btn btn-success btn-lg my-sm-2 site_iffar">
                                {{ __('Pronto') }}
                            </button>
                        </div>
                        
                        
                        
                        <div id="formFooter">
                            @if (Route::has('password.request'))
                            <a class="text-white font-weight-bolder" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?') }}
                            </a>
                            @endif
                            
                        </div>
                    </div>
           
            </form> 

            <!-- Remind Passowrd -->

        </div>
    </div>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @include('admin.pages.sistemas_internet._partials.rodape')
    
    @endsection 
 