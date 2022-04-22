<div class="mt-2">
    <div class="col-12">
        <h3 class="text-center"><strong>Mais pedidos</strong></h3>
        <div class="row justify-content-center">
            <?php $__empty_1 = true; $__currentLoopData = $maisPedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-12 col-sm-4 mt-3">
                    <div class="card shadow-sm">
                        <img class="card-img-top" height="400" src="https://images.unsplash.com/photo-1561047029-3000c68339ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29mZWV8ZW58MHx8MHx8&w=1000&q=80" />
                        <div class="card-body">
                            <?php echo e($pedido->nome); ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <span class="text-center">Nenhum pedido encontrado!</span>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Users/matheus/Documents/Projetos/cafe-contri/resources/views/includes-index/main-section.blade.php ENDPATH**/ ?>