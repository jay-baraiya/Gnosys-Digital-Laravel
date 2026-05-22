@extends('layouts.app')

@section('content')
    <section class="py-5" style="min-height: calc(100vh - 160px); background: #f4f8ff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-5">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
                                <div>
                                    <h1 class="h3 fw-bold mb-2">Welcome, {{ auth()->user()->name }}!</h1>
                                    <p class="text-muted mb-0">This is your private Gnosys Digital dashboard. You must be logged in to access this page.</p>
                                </div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                                </form>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card rounded-4 border-0 shadow-sm h-100 p-4">
                                        <h5 class="fw-semibold">Your account</h5>
                                        <p class="text-muted">Email: {{ auth()->user()->email }}</p>
                                        <p class="text-muted">Member since {{ auth()->user()->created_at->format('F j, Y') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card rounded-4 border-0 shadow-sm h-100 p-4 bg-primary text-white">
                                        <h5 class="fw-semibold">Gnosys Support</h5>
                                        <p>Need help? Contact us from the main website and we will respond quickly.</p>
                                        <a href="{{ route('contact') }}" class="btn btn-light btn-sm">Contact Support</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 p-4 rounded-4 bg-white border shadow-sm">
                                <h5 class="fw-semibold mb-3">Quick actions</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="p-3 rounded-4 border h-100">
                                            <h6>Explore Services</h6>
                                            <p class="text-muted mb-0">Browse our digital products and service categories.</p>
                                            <a href="{{ route('digital-services') }}" class="stretched-link text-decoration-none text-primary">View services</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="p-3 rounded-4 border h-100">
                                            <h6>Read our blog</h6>
                                            <p class="text-muted mb-0">See the latest updates and growth ideas from Gnosys Digital.</p>
                                            <a href="{{ route('blog.index') }}" class="stretched-link text-decoration-none text-primary">Read blog</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="p-3 rounded-4 border h-100">
                                            <h6>Update profile</h6>
                                            <p class="text-muted mb-0">You can update your information from your account settings later.</p>
                                            <a href="{{ route('home') }}" class="stretched-link text-decoration-none text-primary">Go to site</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
