@extends('auth.auth-master')

@section('content')
<div id="new-register-container" class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="col-12 mb-4">
                <div class="col-md-12">
                    <img src="{{ asset('images/logo.png') }}" class="mx-auto d-block" height="90" height="90" alt="">
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('auth-cafe-contri.salvar-registro') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="form-label" for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control">
                            @error('nome')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="PESSOA_FISICA">
                            <label class="form-check-label" for="tipoPessoaFisica">Pessoa física</label>
                        </div>
                        <div class="form-check form-check-inline mb-4">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="PESSOA_JURIDICA">
                            <label class="form-check-label" for="tipoPessoaJuridica">Pessoa jurídica (Empresa)</label>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label" for="nome">Email</label>
                            <input type="email" name="email" class="form-control">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark shadow-sm float-end">
                                Registrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
