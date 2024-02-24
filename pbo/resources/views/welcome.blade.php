@extends('layouts.welcome')
@section('title')
{{ config('app.name') }}
@endsection
@section('content')

    <body class="antialiased">
    <div class="text-center">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endauth
            </div>
            @endif
        </div>
</body>
@endsection