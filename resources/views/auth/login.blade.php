@extends('layouts.auth')

@section('auth-title', 'User Login')
@section('auth-subtitle', 'Login to access your Gnosys Digital dashboard.')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger rounded-4">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control form-control-lg @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" name="password" required class="form-control form-control-lg @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Login</button>
    </form>

    <div class="mt-4 text-center">
        <span class="text-muted">New to Gnosys?</span>
        <a href="{{ route('register') }}" class="fw-semibold">Create an account</a>
    </div>
@endsection
