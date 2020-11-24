@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('title','Cadastro Curso')
    <style>
       body {
        background-image: url(img/floresta.jpg) !important;
        font: normal arial;
    }
    </style>
@section('content')
@include('admin.pages.sistemas_internet._partials.cabecalho')

{{-- <body class="bg-success"> --}}

    <div class="wrapper fadeInDown" style="margin-top: 50" >
        <div>
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first"><br>
                <h1>Cadastro de Curso</h1>
            </div>

            <!-- Login Form -->
            <form action="inserir.php" method="POST" enctype="multipart/form-data" >
                @include('admin.pages.sistemas_internet._partials.form_curso')

            </form>

        </div>
    </div>
</div>
</div>
</div>
    @include('admin.pages.sistemas_internet._partials.rodape')
{{-- </body> --}}


@endsection