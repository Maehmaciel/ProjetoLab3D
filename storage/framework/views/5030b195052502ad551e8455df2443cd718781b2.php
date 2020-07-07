<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Senai Lab</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f4a67b897.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="<?php echo e(url('/js/animacaogaleria.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(url('css/galeria.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(url('css/estiloindex.css')); ?>" >

</head>

<body id="corpo" onload ="navegarAjax('/projetos', '.conteudo')">

    <header class="cabecalho">


     <?php if (isset($component)) { $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Menu::class, []); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9)): ?>
<?php $component = $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9; ?>
<?php unset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

        <div class="logo">
            <a href="" sl-fonte="/projetos" sl-destino=".conteudo">
                <img src="<?php echo e(url('/imagens/logosenailab.png')); ?>" alt="Logo" />
            </a>
        </div>
    </header>
    <main class="conteudo">

    </main>


</body>

</html>
<?php /**PATH /home/maeh/ProjetoLab3D/resources/views/index.blade.php ENDPATH**/ ?>