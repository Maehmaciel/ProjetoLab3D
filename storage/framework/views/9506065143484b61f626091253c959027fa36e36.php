
<!--------------------------------------------------------------------------------------------------------------------------->
<div class="projetos">
<button class="botaoEnviar"  onclick="navegarAjax('/enviarProjeto','.conteudo')"><i class="fas fa-upload"></i> Envie</button>
<button class="botaoEnviar"  onclick="navegarAjax('/filtro3D','.proj')">Impressao 3D</button>
<button class="botaoEnviar"  onclick="navegarAjax('/filtroLazer','.proj')">Corte Lazer</button>
<div class="proj">
<div class="alaProjeto">

        <?php $__currentLoopData = $vProjetos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projeto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $imagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($projeto -> id === $img -> codprojeto): ?>
        <div class="d imagemProjeto">
            
            
        </div>
        <?php break; ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
</div>
</div>

<!--------------------------------------------------------------------------------------------------------------------------->
<?php /**PATH /home/maeh/ProjetoLab3D/resources/views/projetos.blade.php ENDPATH**/ ?>