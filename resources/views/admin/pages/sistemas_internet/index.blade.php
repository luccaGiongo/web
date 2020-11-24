@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('title','Bem-Vindo')
@section('content')
<style>
body {
    /* background-image: url(../img/glitter.jpg); */

}
</style>

<body>
    <header>
        <br>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class=" font-italic">IFFAR - CAMPUS PANAMBI</h1>
                <p class="lead my-3">Seja bem-vind@ ao Repositório Web, comece escolhendo o curso e depois o trabalho ou
                    <i>template</i>
                </p>
                {{-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p> --}}
            </div>
        </div>


        @include('admin.pages.sistemas_internet._partials.cabecalho')
    </header>
    <!-- Mensagens de marketing e outras featurezinhas
        ================================================== -->
    <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

    <div class="container marketing">

        <!-- Três colunas de texto, abaixo do carousel -->
        <div class="row text-justify">
            <div class="col-lg-4 text-center">
                <img class="rounded-circle"
                    {{-- src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" --}}
                    src="img/photo.png" alt="Generic placeholder image" width="140" height="140"><br><br>
                <h2>Tecnologia Em Sistemas para Internet</h2>
                <p>Breve descrição do curso</p>
                <p><a class="btn btn-secondary" style="width:90;height:40" href="#" role="button">Ver &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="rounded-circle"
                    {{-- src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" --}}
                    src="img/photo.png" alt="Generic placeholder image" width="140" height="140"><br><br>
                <h2>Tecnologia Em Sistemas para Internet</h2>
                <p>Breve descrição do curso</p>

                <p><a class="btn btn-secondary" style="width:90;height:40" href="#" role="button">Ver &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="rounded-circle"
                    {{-- src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" --}}
                    src="img/photo.png" alt="Generic placeholder image" width="140" height="140"><br><br>
                <h2>Tecnologia Em Sistemas para Internet</h2>
                <p>Breve descrição do curso</p>

                <p><a class="btn btn-secondary" style="width:90;height:40" href="#" role="button">Ver &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

        <hr class="featurette-divider">
        <h3>Arquivos inseridos recentemente</h3>

        <table id="example" class="display text-center" style="width:100%">
            <thead>
                <tr>
                    <th width="100">Título</th>
                    <th>Palavras-chave</th>
                    <th width="100">Ano de Publicação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Exemplo 1 </td>
                    <td>Exemplo 1 </td>
                    <td>2020 </td>
                    <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
                </tr>
                <tr>
                    <td>Exemplo 2 </td>
                    <td>Exemplo 2 </td>
                    <td>2020 </td>
                    <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
                </tr>
                <tr>
                    <td>teste</td>
                    <td>teste </td>
                    <td>2020 </td>
                    <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
                </tr>
            </tbody>
        </table><br>
    </div>
    </div><!-- /.container -->
    </section>
    <!-- FOOTER -->
    @include('admin.pages.sistemas_internet._partials.rodape')
    @endsection


</body>



</html>