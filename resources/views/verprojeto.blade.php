<h1>{{$vProjetos -> nome}}</h1>
<div class="textoProjeto">
     <p>{{$vProjetos -> descricao}}</p>

@if($vProjetos -> infoAdicional)
<p>{{$vProjetos -> infoAdicional}}</p>
@endif
</div>

<div class="alaVerProjeto">

     @foreach($imagens as $img)
     @if ($vProjetos -> id === $img -> codprojeto)
     <div class="d verProjeto ">
     @if(($vProjetos -> id < 4))
     <img src="imagensProjeto/{{$img -> nome}}" alt="Foto do projeto:{{$vProjetos -> nome}}">
     @else
            <img src=<?php echo asset("/storage/image_upload/{$img-> nome}")?> alt="Foto do projeto: {{$vProjetos -> nome}}">
            @endif
     </div>
     @endif
     @endforeach
   

          
     @foreach($arquivos as $arq)
     @if ($vProjetos -> id === $arq-> codprojeto)
        <div class="d imagemProjeto">
     @break
     @endif
     @endforeach
     @foreach($arquivos as $arq)
     @if ($vProjetos -> id === $arq-> codprojeto)
     Baixar arquivo:<a href=<?php echo asset("/storage/arquivos_upload/{$arq-> nome}") ?> download="{{$arq-> nome}}">
         {{$arq->nome}}
     </a>
     @endif
     
     @endforeach 
     </div>   
     

  
     
    

</div>
@if(!($vProjetos -> id <= 3))
<button class="botaoEnviar" onclick='navegarAjax("/apagar/{{$vProjetos -> id}}",".conteudo")'>Apagar</button>
<button class="botaoEnviar" onclick='navegarAjax("/editar/{{$vProjetos -> id}}",".conteudo")'>Editar</button>
@endif