@extends('layouts.master')

@section('content')
    <section id="slide-section">
        @include('includes-index.slides')
    </section>
    <div id="main-content" class="container">
        <section id="news-section">
            @include('includes-index.news-section')
        </section>
        <section id="main-section">
            @include('includes-index.main-section')
        </section>
    </div>
@endsection
