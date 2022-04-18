@extends('layouts.master')

@section('content')
    <div id="produtos-container" class="container">
        <div class="col-12">
            <div class="row justify-content-between">
                <div class="col-6">
                    <h3><strong>Produtos</strong></h3>
                </div>
                <div class="col-6">
                    <button class="btn btn-dark float-end shadow-sm">
                        Novo produto
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="row justify-content-center">
                @forelse ($produtos as $produto)
                    tem
                @empty
                    <div class="col-12">
                        <div class="card shadow-sm notfound">
                            <div class="card-body">
                                <img src="https://opel.navigation.com/static/WFS/Shop-Site/-/Shop/en_US/Product%20Not%20Found.png" height="400" width="900" class="img-fluid mx-auto d-block">
                                <p class="text-center">
                                    <strong>Nenhum produto encontrado</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
