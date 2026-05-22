@extends('layouts.app')

@section('content')
<section class="page-hero-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="avatar-lg">{{ strtoupper(substr($user->name,0,1)) }}</div>
                            <div>
                                <h3 class="mb-0">{{ $user->name }}</h3>
                                <div class="text-muted">{{ $user->email }}</div>
                            </div>
                        </div>

                        <hr>

                        <h6 class="text-muted">Account details</h6>
                        <ul class="list-unstyled mb-3">
                            <li><strong>Registered:</strong> {{ $user->created_at->format('F d, Y H:i') }}</li>
                            <li><strong>Last updated:</strong> {{ $user->updated_at->format('F d, Y H:i') }}</li>
                        </ul>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-primary">Edit profile</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
