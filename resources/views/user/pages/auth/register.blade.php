@extends('mechanic.pages.auth.layout')
@section('content')
    <div class="login-auth-wrap">
        <div class="sign-group">
            <a href="{{ route('user.home') }}" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span>
                Back To Home</a>
        </div>
        <h1>Sign Up</h1>
        <p class="account-subtitle">Enter your details to register as a User.</p>
        <livewire:user.pages.auth.register />
    </div>
@endsection
