@extends('layouts.auth.main')

@section('content')
    <div class="auth-logo">
        <a href="index.html"><img src="{{ asset('backend') }}/assets/images/logo/logo.svg" alt="Logo"/></a>
    </div>
    <h1 class="auth-title">Forgot Password</h1>
    <p class="auth-subtitle mb-5">
        Input your email and we will send you reset password link.
    </p>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" name="email" class="form-control form-control-xl @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">
          Remember your account?
          <a href="{{ route('login') }}" class="font-bold">Log in</a>.
        </p>
    </div>
@endsection
