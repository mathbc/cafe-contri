@extends('auth.auth-master')

@section('content')
<div id="login-container" class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="col-12 mb-4">
                <div class="col-md-12">
                    <img src="{{ asset('images/logo.png') }}" class="mx-auto d-block" height="90" height="90" alt="">
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <a href="#">Não possuo cadastro</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-dark shadow-sm float-end">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
