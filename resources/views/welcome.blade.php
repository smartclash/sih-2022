@extends('layout.app')

@section('content')
    <section class="hero is-link is-fullheight-with-navbar">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">{{ config('app.name') }}</h1>
                <h2 class="subtitle">Advanced ticket booking system</h2>
            </div>
        </div>
    </section>
@endsection
