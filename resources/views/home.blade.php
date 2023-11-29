@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

    <div class="home">
        <div class="container text-center">
            <img src="{{ asset('images/logo.png') }}" height="30" class="img-fluid" alt="">
            <h1 class="text-center">Welcome to the <span class="text-success">{{ config('app.name') }}</span> admin
                panel</h1>
            @guest
                @if (Route::has('login'))
                    <a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

            @else
                <a href="{{route('admin.home') }}" class="btn btn-success">
                    {{ __('Go Admin Panel') }}
                </a>
            @endguest
        </div>
    </div>

@endsection
