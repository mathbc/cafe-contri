@extends('layouts.master')

@section('content')
    <div id="admin-container" class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h3><strong>Paínel de controle</strong></h3>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            @include('admin.includes.navegacao')
            <div class="tab-content mt-4">
                @yield('admin-content')
            </div>
        </div>
    </div>
@endsection
