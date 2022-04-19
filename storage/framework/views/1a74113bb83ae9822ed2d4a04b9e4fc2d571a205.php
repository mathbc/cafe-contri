<nav class="navbar-main navbar navbar-expand-lg navbar-dark shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand mr-4" href="#">
            <img src="<?php echo e(asset('images/logo.png')); ?>" height="70" height="70" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <a class="nav-link <?php echo e(Route::is('home') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('home')); ?>">Início</a>
                <a class="nav-link <?php echo e(Route::is('produtos.*') ? 'active' : ''); ?>" href="<?php echo e(route('produtos.index')); ?>">Produtos</a>
                <a class="nav-link" href="#">Sobre nós</a>
            </div>
            <div class="navbar-nav ms-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <span class="nav-link text-warning">Faça o login para efetuar pedidos <i class="fa fa-arrow-right"></i></span>
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                <?php else: ?>
                    <a id="link-carrinho" class="nav-link position-relative" href="#">
                        <i class="fa fa-cart-shopping">
                        </i>
                        <span id="bagde-itens-carrinho" class="badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99
                        </span>
                    </a>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cadastrar', \App\Models\Produto::class)): ?>
                                <div class="dropdown-item">
                                    Painel de controle
                                </div>
                            <?php endif; ?>

                            <div class="dropdown-item">
                                Meus Pedidos
                            </div>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH /Users/matheus/Documents/Projetos/cafe-contri/resources/views/layouts/includes/navbar.blade.php ENDPATH**/ ?>