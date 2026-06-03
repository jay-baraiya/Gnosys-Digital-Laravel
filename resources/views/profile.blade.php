@extends('layouts.app')

@section('content')
<section class="page-hero-section">
    {{-- <div class="container">
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
    </div> --}}

    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <button class="nav-link text-start px-4 py-3 border-bottom rounded-0 text-white fw-semibold active" id="v-pills-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account" type="button" role="tab" aria-controls="v-pills-account" aria-selected="true" onclick="this.classList.add('bg-primary', 'text-white'); this.classList.remove('bg-white', 'text-dark');">
                                <i class="bi bi-person me-2"></i> My Account
                            </button>

                            <button class="nav-link text-start px-4 py-3 border-bottom rounded-0 text-dark fw-semibold" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false">
                                <i class="bi bi-box me-2"></i> My Orders
                            </button>

                            <button class="nav-link text-start px-4 py-3 border-bottom rounded-0 text-dark fw-semibold" id="v-pills-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-address" type="button" role="tab" aria-controls="v-pills-address" aria-selected="false">
                                <i class="bi bi-geo-alt me-2"></i> Saved Addresses
                            </button>

                            <button class="nav-link text-start px-4 py-3 border-bottom rounded-0 text-dark fw-semibold" id="v-pills-wishlist-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wishlist" type="button" role="tab" aria-controls="v-pills-wishlist" aria-selected="false">
                                <i class="bi bi-heart me-2"></i> Wishlist
                            </button>

                            <button class="nav-link text-start px-4 py-3 rounded-0 text-danger fw-semibold" type="button">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                                </form>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-white border-bottom py-3">
                                <h5 class="mb-0 fw-bold">Profile Details</h5>
                            </div>
                            <div class="card-body p-4">
                                <form action="{{ route('profile.update') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label text-muted">First Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Enter name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label text-muted">Email Address</label>
                                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label text-muted">Phone Number</label>
                                        <input type="number" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="+91 00000 00000">
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-white border-bottom py-3">
                                <h5 class="mb-0 fw-bold">Order History</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="px-4 py-3">Order No.</th>
                                                <th class="py-3">Date</th>
                                                <th class="py-3">Status</th>
                                                <th class="py-3">Amount</th>
                                                <th class="px-4 py-3 text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($orders as $order)
                                                <tr>
                                                    <td class="px-4 py-3 fw-semibold">#{{ $order->order_number }}</td>
                                                    <td class="text-muted">
                                                        {{ $order->date_time ? $order->date_time->format('F d, Y') : 'N/A' }}
                                                    </td>
                                                    <td>
                                                        @if(in_array(strtolower($order->status), ['delivered', 'completed', 'success']))
                                                            <span class="badge bg-success bg-opacity-10 text-success px-2 py-1">
                                                                {{ ucfirst($order->status) }}
                                                            </span>
                                                        @elseif(in_array(strtolower($order->status), ['pending', 'processing']))
                                                            <span class="badge bg-warning bg-opacity-10 text-warning px-2 py-1">
                                                                {{ ucfirst($order->status) }}
                                                            </span>
                                                        @else
                                                            <span class="badge bg-secondary bg-opacity-10 text-secondary px-2 py-1">
                                                                {{ ucfirst($order->status) }}
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td class="fw-semibold">${{ number_format($order->total_amount, 2) }}</td>
                                                    <td class="px-4 text-end">
                                                        <a href="{{ route('order.item.list', ['order_id' => encrypt($order->id)]) }}" class="btn btn-sm btn-outline-primary orderHistotyBtn">View</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center py-4 text-muted">
                                                        No orders found.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 fw-bold">Saved Addresses</h5>
                                <button class="btn btn-sm btn-primary">+ Add New</button>
                            </div>
                            <div class="card-body p-4">
                                <div class="border rounded p-3 mb-3 border-primary shadow-sm">
                                    <span class="badge bg-primary mb-2">Default</span>
                                    <h6 class="fw-bold">Jay</h6>
                                    <p class="text-muted mb-1">123, Development Hub, Main Road</p>
                                    <p class="text-muted mb-2">Rajkot, Gujarat - 360001, India</p>
                                    <button class="btn btn-sm btn-outline-secondary me-2">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
                        <div class="card shadow-sm border-0">
                            <div class="card-body p-5 text-center">
                                <i class="bi bi-heart text-muted" style="font-size: 3rem;"></i>
                                <h5 class="mt-3 fw-bold">Your Wishlist is Empty</h5>
                                <p class="text-muted">Explore items and add them to your wishlist.</p>
                                <button class="btn btn-primary mt-2">Continue Shopping</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="orderItemsModal" tabindex="-1" aria-labelledby="orderItemListModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="orderItemListModalLabel">Order History</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="orderItemsModalBody">
        ...
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#v-pills-tab .nav-link').on('click', function() {
                console.log('test');

                $('#v-pills-tab .nav-link')
                    .removeClass('bg-primary text-white')
                    .addClass('text-dark bg-white');

                $(this)
                    .addClass('bg-primary text-white')
                    .removeClass('text-dark bg-white');
            });

            $(document).on('click', '.orderHistotyBtn', function(e) {
                e.preventDefault();

                let url = $(this).attr('href');

                let btn = $(this);
                let originalText = btn.html();
                btn.html('<span class="spinner-border spinner-border-sm"></span>');

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        btn.html(originalText);

                        if (response.success) {
                            $('#orderItemsModalBody').html(response.html);

                            $('#orderItemsModal').modal('show');
                        } else {
                            alert(response.message || 'Something went wrong!');
                        }
                    },
                    error: function(xhr) {
                        btn.html(originalText);
                        alert('Error fetching order details. Please try again.');
                    }
                });

            });
        });
    </script>
@endpush
@endsection
