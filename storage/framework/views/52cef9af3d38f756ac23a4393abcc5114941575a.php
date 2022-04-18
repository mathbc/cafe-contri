<?php $__env->startSection('content'); ?>
    <section id="slide-section">
        <?php echo $__env->make('includes-index.slides', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <div id="main-content" class="container">
        <section id="news-section">
            <?php echo $__env->make('includes-index.news-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <section id="main-section">
            <?php echo $__env->make('includes-index.main-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matheus/Documents/Projetos/cafe-contri/resources/views/index.blade.php ENDPATH**/ ?>