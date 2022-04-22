@extends('layouts.master')

@section('content')
    <section id="slide-section">
        @include('includes-index.slides')
    </section>
    <div class="container main-content">
        <section id="news-section">
            @include('includes-index.news-section')
        </section>
    </div>
    <section>
        @include('includes-index.qualities-section')
    </section>
    <div class="container main-content">
        <section id="main-section">
            @include('includes-index.main-section')
        </section>
    </div>
@endsection
