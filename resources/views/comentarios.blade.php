<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Senai Lab</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f4a67b897.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{url('js/animacaoGaleria.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/galeria.css')}}" >
    <link rel="stylesheet" href="{{url('css/estiloindex.css')}}" >

</head>

<body id="corpo" >

    <header class="cabecalho">


    <x-menu />

        <div class="logo">
            <a href="" sl-fonte="/projetos" sl-destino=".conteudo">
                <img src="{{url('/imagens/logosenailab.png')}}" alt="Logo" />
            </a>
        </div>
    </header>
    <main class="conteudo">
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
                        <form action="upComent" method="post">
                            @csrf
                            <label for="nome">Nome: </label>
                            <input type="text" name="nome" id="nome" required="required">
                            <label for="comentario">Envie seu comentario: </label>
                            <textarea name="comentario" id="comentario" cols="30" rows="8" required="required"></textarea>
                            <button class="botaoEnviar">Enviar</button>
                        </form>
                    </div>

                    @foreach($vComentarios as $comentario)
                    <div class="d umComent">
                        <p><strong>
                                {{$comentario->nome}} diz:</strong></p>
                        <p>{{$comentario->comentario}}</p>
                    </div>
                    @endforeach

                </div>
    </main>


</body>

</html>
