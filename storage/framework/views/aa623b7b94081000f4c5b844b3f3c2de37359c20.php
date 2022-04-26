<?php $__env->startSection('content'); ?>
    <div id="produtos-container" class="container">
        <div class="col-12">
            <div class="row justify-content-between">
                <div class="col-6">
                    <h3><strong>Produtos</strong></h3>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cadastrar', \App\Models\Produto::class)): ?>
                    <div class="col-6">
                        <a href="<?php echo e(route('produtos.cadatro')); ?>" class="btn btn-dark float-end shadow-sm">
                            Novo produto
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="row justify-content-center">
                <?php $__empty_1 = true; $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="card shadow-sm">
                            <?php if($produto->imagemProduto): ?>
                                <img class="card-img-top" height="400" src="<?php echo e(asset('storage/'.str_replace('public', '', $produto->imagemProduto->caminho))); ?>" />
                            <?php else: ?>
                                <span class="text-center mt-3 text-danger">Nenhuma imagem cadastrada.</span>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title text-center mb-4">
                                    <?php echo e($produto->nome); ?>

                                </h5>
                                <h5 class="text-center text-success mb-3">R$ <?php echo e($produto->preco); ?></h5>
                                <div class="text-center">
                                    <?php
                                        $message = "Olá estou interessado em comprar o produto ".$produto->nome;
                                        $message = Str::replace(" ", "%20", $message);
                                    ?>
                                    <a href="" class="btn btn-secondary mx-auto">Informações</a>
                                    <a href="https://wa.me/5547997900065/?text=<?php echo e($message); ?>" class="btn btn-success mx-auto">
                                        Fale conosco
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12">
                        <div class="card shadow-sm notfound">
                            <div class="card-body">
                                <img src="https://opel.navigation.com/static/WFS/Shop-Site/-/Shop/en_US/Product%20Not%20Found.png" height="400" width="900" class="img-fluid mx-auto d-block">
                                <p class="text-center">
                                    <strong>Nenhum produto encontrado :(</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-12 mt-5">
                    <?php if(!empty($produtos)): ?>
                        <?php echo $produtos->withQueryString()->links('pagination::bootstrap-5'); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matheus/Documents/Projetos/cafe-contri/resources/views/produtos/index.blade.php ENDPATH**/ ?>