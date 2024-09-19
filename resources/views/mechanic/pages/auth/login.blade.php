@extends('mechanic.pages.auth.layout')
@section('content')

<div class="login-auth-wrap">
    <div class="sign-group">
        <a href="{{ route('mechanic.home') }}" class="btn sign-up"><span><i class="fe feather-corner-down-left"
                    aria-hidden="true"></i></span> Back To Home</a>
    </div>
    <h1>Sign In</h1>
    <p class="account-subtitle">Enter your credentials to login as a mechanic.</p>
    <livewire:mechanic.pages.auth.login />
</div>

@endsection
