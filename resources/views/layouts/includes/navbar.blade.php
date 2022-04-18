<nav class="navbar-main navbar navbar-expand-lg navbar-dark shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand mr-4" href="#">
            <img src="{{ asset('images/logo.png') }}" height="70" height="70" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Início</a>
                <a class="nav-link {{ Route::is('produtos.*') ? 'active' : '' }}" href="{{ route('produtos.index') }}">Produtos</a>
                <a class="nav-link" href="#">Sobre nós</a>
            </div>
            <div class="navbar-nav ms-auto">
                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @else
                    <a id="link-carrinho" class="nav-link position-relative" href="#">
                        <i class="fa fa-cart-shopping">
                        </i>
                        <span id="bagde-itens-carrinho" class="badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99
                        </span>
                    </a>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            @can('cadastrar', \App\Models\Produto::class)
                                <div class="dropdown-item">
                                    Painel de controle
                                </div>
                            @endcan

                            <div class="dropdown-item">
                                Meus Pedidos
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>
        </div>
    </div>
</nav>
