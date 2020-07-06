<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Senai Lab</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f4a67b897.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="<?php echo asset('js/animacaoGaleria.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo asset('css/galeria.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/estiloIndex.css') ?>">

</head>

<body id="corpo">
    <header class="cabecalho">


        <nav class="menu">
            <ul>
                <li><a href="/" class="botao"><i class="fas fa-cogs"></i> <span class="txtMenu">Projetos</span></a></li>
                <li><a href=" " class="botao" sl-fonte="/galeria" sl-destino=".conteudo"><i class="fas fa-camera"></i> <span class="txtMenu">Galeria</span></a></li>
                <li><a href="/comentarios" class="botao"><i class="fas fa-comments"></i> <span class="txtMenu">Comentarios</span></a></li>
                <li><a href=" " class="botao" sl-fonte="/sobre" sl-destino=".conteudo"><i class="fas fa-info-circle"></i> <span class="txtMenu">Sobre</span></a></li>
            </ul>
            <script src="<?php echo asset('js/carregaConteudo.js') ?>"></script>
        </nav>

        <div class="logo">
            <a href="" sl-fonte="/projetos" sl-destino=".conteudo">
                <img src="imagens/logoSenaiLab.png" alt="Logo" />
            </a>
        </div>
    </header>
    <main class="conteudo">
        <div>
            <?php if($errors->any()): ?>
            <div>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($erro); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <?php endif; ?>
            <div>
                <div class="alaEnvio">
                    <div class="d form">
                        <form action="upComent" method="post">
                            <?php echo csrf_field(); ?>
                            <label for="nome">Nome: </label>
                            <input type="text" name="nome" id="nome" required="required">
                            <label for="comentario">Envie seu comentario: </label>
                            <textarea name="comentario" id="comentario" cols="30" rows="8" required="required"></textarea>
                            <button class="botaoEnviar">Enviar</button>
                        </form>
                    </div>

                    <?php $__currentLoopData = $vComentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d umComent">
                        <p><strong>
                                <?php echo e($comentario->nome); ?> diz:</strong></p>
                        <p><?php echo e($comentario->comentario); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
    </main>


</body>

</html><?php /**PATH /home/maeh/ProjetoLab3D/resources/views/comentarios.blade.php ENDPATH**/ ?>