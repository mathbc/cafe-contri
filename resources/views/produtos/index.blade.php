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
                            @if ($produto->imagemProduto)
                                <img class="card-img-top" height="400" src="{{ asset('storage/'.str_replace('public', '',$produto->imagemProduto->caminho)) }}" />
                            @else
                                <span class="text-center mt-3 text-danger">Nenhuma imagem cadastrada.</span>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title text-center mb-4">
                                    {{ $produto->nome }}
                                </h5>
                                <h5 class="text-center text-success mb-3">R$ {{ $produto->preco }}</h5>
                                <div class="text-center">
                                    @php
                                        $message = "Olá estou interessado em comprar o produto ".$produto->nome;
                                        $message = Str::replace(" ", "%20", $message);
                                    @endphp
                                    <a href="" class="btn btn-secondary mx-auto">Informações</a>
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
