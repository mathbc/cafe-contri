@extends('layouts.master')

@section('content')
    <div id="produtos-container" class="container">
        @if (session()->has('success'))
            <div class="col-12 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                </svg>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                      {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h3><strong>Cadatro de produto</strong></h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-12 mt-4">
            <form action="{{ $produto ? route('produtos.salvar', $produto) : route('produtos.salvar') }}" method="post">
                @csrf
                <div class="col-12 col-sm-2 mb-4">
                    <div class="form-group">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" name="codigo" value="{{ $produto ? $produto->codigo : old('codigo') }}" class="form-control shadow-sm @error('codigo') is-invalid @enderror">
                        @error('codigo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4 mb-4">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" value="{{ $produto ? $produto->nome : old('nome') }}" class="form-control shadow-sm @error('nome') is-invalid @enderror">
                        @error('nome')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4 mb-4">
                    <div class="form-group">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" name="marca" value="{{ $produto ? $produto->codigo : old('marca') }}" class="form-control shadow-sm @error('marca') is-invalid @enderror">
                        @error('marca')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <div class="form-group">
                                <label for="tipo_cobranca" class="form-label">Tipo de cobrança</label>
                                <select name="tipo_cobranca" class="form-select shadow-sm">
                                    <option value="POR_UNIDADE" @if($produto && $produto->tipo_cobranca == 'POR_UNIDADE') selected @endif>Por unidade</option>
                                    <option value="POR_QUILO" @if($produto && $produto->tipo_cobranca == 'POR_QUILO') selected @endif>Por Quilo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="form-group">
                                <label for="quantidade_estoque" class="form-label">Quantidade em estoque</label>
                                <input type="text" name="quantidade" value="{{ $produto ? $produto->quantidade : old('quantidade') }}" class="form-control shadow-sm @error('quantidade') is-invalid @enderror">
                                @error('quantidade')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="form-group">
                                <label for="preco" class="form-label">Preço</label>
                                <input type="number" name="preco" value="{{ $produto ? $produto->preco : old('preco') }}" class="form-control shadow-sm @error('preco') is-invalid @enderror">
                                @error('preco')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="inativo" role="switch" id="flexSwitchCheckChecked" @if($produto && !$produto->ativo) checked @endif>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Inativo</label>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" cols="30" rows="10" class="form-control shadow-sm"></textarea>
                    </div>
                </div>
                <button class="btn btn-dark float-end shadow mb-4" type="submit">Salvar</button>
            </form>
        </div>
    </div>
@endsection
