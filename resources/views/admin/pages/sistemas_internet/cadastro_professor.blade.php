@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('title','Cadastro Professor')
    <style>
       body {
        background-image: url(img/papel-amassado.jpg) !important;
        font: normal arial;
    }
    </style>
@section('content')
@include('admin.pages.sistemas_internet._partials.cabecalho')

{{-- <body class="bg-success"> --}}

    <div class="wrapper fadeInDown" style="margin-top: 50" >
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first"><br>
                <h1>Cadastro Professor</h1>
            </div>

            <!-- Login Form -->
            <form action="{{ route('professor.store')}}" method="POST" >
                @include('admin.pages.sistemas_internet._partials.form_professor')

            </form>

        </div>
    </div>
</div>
</div>
</div>
    @include('admin.pages.sistemas_internet._partials.rodape')
{{-- </body> --}}


@endsection