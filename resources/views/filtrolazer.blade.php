<div class="alaProjeto">
@foreach($vProjetos as $projeto)
@if($projeto -> codTipo ===1)
@continue
@else
        @foreach($imagens as $img)
        @if ($projeto -> id === $img -> codprojeto)
        <div class="d imagemProjeto">
            @if(($projeto -> id <= 3))
            <img src="imagensProjeto/{{$img -> nome}}" alt="Foto do projeto:{{$projeto -> nome}}">
            @else
            <img src=<?php echo asset("/storage/image_upload/{$img-> nome}")?> alt="Foto do projeto: {{$projeto -> nome}}">
            @endif
            <a class="capa" onclick='navegarAjax("/ver/{{$projeto -> id}}",".conteudo")'>
            {{$projeto -> nome}}
            </a>
        </div>
        @break
        @endif
        @endforeach
        @endif
        @endforeach
<</div>