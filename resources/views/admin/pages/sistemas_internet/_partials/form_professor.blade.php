@csrf

<input type="text" class="text-black" name="nome" placeholder="Nome" id="" value="{{$usuario->nome ?? old('name')}}">
<input type="text" class="text-black" name="siape" placeholder="SIAPE" id="" value="{{$usuario->siape ?? old('siape')}}">
<input type="email" class="text-black" name="email" placeholder="E-mail" id="" value="{{$usuario->email ?? old('email')}}">
<input type="text" class="text-black" name="link_lattes" placeholder="Link de acesso ao currículo Lattes" id="" value="{{$usuario->link_lattes ?? old('link_lattes')}}">
{{-- <br><input type="radio" class="text-black" name="cursos_vinculados" id=""> --}}
{{-- @foreach ($collection as $item)
{{$cursos->nome}}<input type="radio" name="{{$cursos->$id}}" id="">
@endforeach --}}
<input type="hidden" name="curso" value="Tecnologia em Sistemas Para Internet" id="">
{{-- Tecnologia em Sistemas para Internet <br> --}}
{{-- <input type="radio" name="" id=""> --}}
<button class="btn btn-success btn-lg my-sm-4" type="submit">Enviar</button>