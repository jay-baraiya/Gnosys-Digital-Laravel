@extends('layouts.auth')

@section('auth-title', 'Create Account')
@section('auth-subtitle', 'Register now to access the secure Gnosys Digital portal.')

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

    <form method="POST" action="{{ route('register.post') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Full name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required class="form-control form-control-lg @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required class="form-control form-control-lg @error('email') is-invalid @enderror">
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

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="form-control form-control-lg">
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Register account</button>
    </form>

    <div class="mt-4 text-center">
        <span class="text-muted">Already have an account?</span>
        <a href="{{ route('login') }}" class="fw-semibold">Login here</a>
    </div>
@endsection
