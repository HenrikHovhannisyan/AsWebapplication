@extends('admin.layouts.app')

@section('content')
    <section class="login">
        <div class="logo"><img src="{{ asset('images/logo.png') }}" alt="logo"></div>
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>LOGIN:</h1>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <button type="submit">Next</button>
            </form>
        </div>
    </section>
@endsection
