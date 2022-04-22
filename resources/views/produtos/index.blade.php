@extends('layouts.master')

@section('content')
    <div id="produtos-container" class="container">
        <div class="col-12">
            <div class="row justify-content-between">
                <div class="col-6">
                    <h3><strong>Produtos</strong></h3>
                </div>
                @can('cadastrar', \App\Models\Produto::class)
                    <div class="col-6">
                        <a href="{{ route('produtos.cadatro') }}" class="btn btn-dark float-end shadow-sm">
                            Novo produto
                        </a>
                    </div>
                @endcan
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="row justify-content-center">
                @forelse ($produtos as $produto)
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="card shadow-sm">
                            <img class="card-img-top" height="400" src="https://images.unsplash.com/photo-1561047029-3000c68339ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29mZWV8ZW58MHx8MHx8&w=1000&q=80" />

                            <div class="card-body">
                                <h5 class="card-title text-center mb-4">
                                    {{ $produto->nome }}
                                </h5>
                                <h5 class="text-center text-success mb-3">R$ {{ $produto->preco }}</h5>
                                <div class="d-grid mx-auto">
                                    @php
                                        $message = "Olá estou interessado em comprar o produto ".$produto->nome;
                                        $message = Str::replace(" ", "%20", $message);
                                    @endphp
                                    <a href="https://wa.me/5547997900065/?text={{ $message }}" class="btn btn-success mx-auto">
                                        Fale conosco
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
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
                @endforelse

                <div class="col-12 mt-5">
                    @if(!empty($produtos))
                        {!! $produtos->withQueryString()->links('pagination::bootstrap-5') !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
