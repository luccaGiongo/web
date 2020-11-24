@csrf

<body>

    <input type="text" class="text-black" name="nome" placeholder="Nome do curso" id=""
        value="{{$curso->nome ?? old('nome')}}">
    <input type="email" class="text-black" name="email" placeholder="E-mail do coordenador" id=""
        value="{{$curso->nome ?? old('email')}}">
    <input type="text" class="text-black" name="facebook" placeholder="Link do Facebook" id=""
        value="{{$curso->facebook ?? old('facebook')}}">
    <input type="text" class="text-black" name="instagram" placeholder="Link do Instagram" id=""
        value="{{$curso->instagram ?? old('instagram')}}">
    <input type="password" class="text-black" name="senha" placeholder="Senha" id=""
        value="{{$curso->senha ?? old('senha')}}"><br>


    <h2">Perfil do Egresso</h2><br>
        <textarea name="" id="" cols="130" rows="10" id="perfil_egresso"></textarea>

        <input type="text" class="text-black" name="numero_semestres" placeholder="Número de Semestres do Curso" id=""
            value="{{$curso->numero_semestres ?? old('link_lattes')}}">
        <p>Logo do curso:
            <input type="file" class="text-black" name="logo" placeholder="Logo do curso" id=""
                value="{{$curso->logo ?? old('logo')}}">
        </p>
        <p>
            PPC do curso:
            <input type="file" class="text-black" name="ppc" placeholder="PPC do curso" id=""
                value="{{$curso->ppc ?? old('ppc')}}">
        </p>
        <br>
        <p><input type="checkbox" class="text-black" name="ppi" id="">PPI</p>
        <p><input type="checkbox" class="text-black" name="pec" id="">PEC</p>
        <p><input type="checkbox" class="text-black" name="tcc" id="">TCC</p>
        {{-- @foreach ($collection as $item)
    {{$cursos->nome}}<input type="radio" name="{{$cursos->$id}}" id="">
        @endforeach --}}
        {{-- Tecnologia em Sistemas para Internet <br> --}}
        {{-- <input type="radio" name="" id=""> --}}
        <button class="btn btn-success btn-lg my-sm-4" type="submit">Enviar</button>
</body>