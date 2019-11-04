<div>
@if($errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $erro)
                            <li>{{$erro}}</li>
                        @endforeach
                    </ul>   
                </div>

            @endif
        <div>

        <div class="alaEnvio">
                    <div class="d form">
    <form action="up" method="post" enctype="multipart/form-data">
    @csrf
        <label for="nome">Nome: </label>
        <input name="nome" type="text" id="nome" required="required">
        <label for="classificacao">Classificaçao:</label>
        <select name="classificacao" id="classificacao" >
            <option value="1">Impressão 3D</option>
            <option value="2">Corte</option>
        </select>
        <label for="descricao">Descricao: </label>
        <textarea name="descricao" id="descricao" cols="40" rows="10" required="required"></textarea>
        <label for="infoAdicional">Informaçao adicional: </label>
        <textarea name="infoAdicional" id="infoAdicional" cols="20" rows="5"></textarea>
        <label for="envioImagem">Imagens:</label>
        <input id="envioImagem" type="file" name="image[]" multiple required="required">
        <label for="envioArquivos">Arquivos:</label>
        <input id="envioArquivos" type="file" name="arquivos[]" multiple required="required">
        <button type="submit">Enviar</button>
    </form>

               
        </div>        
</div>