
<!--------------------------------------------------------------------------------------------------------------------------->
<div class="projetos">
<button class="botaoEnviar"  onclick="navegarAjax('/enviarProjeto','.conteudo')"><i class="fas fa-upload"></i> Envie</button>
<button class="botaoEnviar"  onclick="navegarAjax('/filtro3D','.proj')">Impressao 3D</button>
<button class="botaoEnviar"  onclick="navegarAjax('/filtroLazer','.proj')">Corte Lazer</button>
<div class="proj">
<div class="alaProjeto">

        @foreach($vProjetos as $projeto)
        @foreach($imagens as $img)
        @if ($projeto -> id === $img -> codprojeto)
        <div class="d imagemProjeto">
            {{-- Campo abaixo é um comentario--}}
            {{-- @if(($projeto -> id <= 3))
            <img src="{{url('imagensProjeto/{{$img -> nome}}')}}" alt="Foto do projeto:{{$projeto -> nome}}">
            @else
            <img src="{{url('/storage/image_upload/{$img-> nome}')}}"  alt="Foto do projeto: {{$projeto -> nome}}">
            @endif
            <a class="capa" onclick='navegarAjax("/ver/{{$projeto -> id}}",".conteudo")'>
            {{$projeto -> nome}}
            </a> --}}
        </div>
        @break
        @endif
        @endforeach
        @endforeach


</div>
</div>
</div>

<!--------------------------------------------------------------------------------------------------------------------------->
