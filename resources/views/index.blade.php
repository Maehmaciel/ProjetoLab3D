<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Senai Lab</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f4a67b897.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{url('/js/animacaogaleria.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/galeria.css')}}" >
    <link rel="stylesheet" href="{{url('css/estiloindex.css')}}" >

</head>

<body id="corpo" onload ="navegarAjax('/projetos', '.conteudo')">

    <header class="cabecalho">


    <x-menu />

        <div class="logo">
            <a href="" sl-fonte="/projetos" sl-destino=".conteudo">
                <img src="{{url('/imagens/logosenailab.png')}}" alt="Logo" />
            </a>
        </div>
    </header>
    <main class="conteudo">

    </main>


</body>

</html>
