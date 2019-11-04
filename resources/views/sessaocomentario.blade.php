@foreach($vComentarios as $comentario)
<div class="d comentarios">

<div class="comment"> {{$comentario->nome}}
    <p>{{$comentario->comentario}}</p>
</div>

</div>
@endforeach