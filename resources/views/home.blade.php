@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

    <div class="home">
        <div class="container text-center">
            <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="">
            <h1 class="text-center">Welcome to the <span class="text-success">AkwaabaBites</span> admin panel</h1>
            @if(Auth::user() && Auth::user()->is_admin === 1)
                <a href="{{route('admin.home') }}" class="btn btn-success">
                    {{ __('Go Admin Panel') }}
                </a>
            @endif
        </div>
    </div>

@endsection
