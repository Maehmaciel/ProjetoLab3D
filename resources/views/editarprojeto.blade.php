<div class="envioProjeto">
    <form action="update/{{$item -> id}}" method="post" enctype="multipart/form-data">
    @csrf()
        <label for="nome">Nome: </label>
        <input name="nome" type="text" id="nome" value="{{ old('item', $item -> nome)}}">
        <label for="descricao">Descricao: </label>
        <textarea name="descricao" id="descricao" cols="40" rows="10">{{ old('item', $item -> descricao)}}</textarea>
        <label for="infoAdicional">Informaçao adicional: </label>
        <textarea name="infoAdicional" id="infoAdicional" cols="20" rows="5">{{ old('item', $item -> infoAdicional)}}</textarea>
        <button type="submit">Enviar</button>
    </form>

               
                
</div>