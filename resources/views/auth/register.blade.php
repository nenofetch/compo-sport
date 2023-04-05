@extends('layouts.auth.main')

@section('main')
    <div class="auth-logo">
        <a href="index.html">
            <img src="{{ asset('backend') }}/assets/images/logo/logo.svg" alt="Logo">
        </a>
    </div>
    <h1 class="auth-title">Sign Up.</h1>
    <p class="auth-subtitle mb-5">
        Input your data to register to our website.
    </p>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="name" class="form-control form-control-xl @error('name')is-invalid @enderror"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
            <div class="form-control-icon">
                <i class="bi bi-people"></i>
            </div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" name="email" class="form-control form-control-xl @error('email')is-invalid @enderror"
                value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email') }}">
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password"
                class="form-control form-control-xl @error('password')is-invalid @enderror"
                placeholder="{{ __('Password') }}">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password_confirmation"
                class="form-control form-control-xl @error('password_confirmation')is-invalid @enderror"
                placeholder="{{ __('Confirm Passsword') }}">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>

        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">
            {{ __('Register') }}
        </button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">
          Already have an account?
          <a href="{{ route('login') }}" class="font-bold">Log in</a>.
        </p>
    </div>
@endsection
