@extends('admin.layouts.app')

@section('title', 'Edit Admin')
@section('page-title', 'Edit Administrator')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-user-edit me-2"></i> Edit Admin Details</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.admins.update', $admin) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ old('name', $admin->name) }}" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email', $admin->email) }}" required>
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <small class="text-muted d-block mb-2">Leave password fields blank if you don't want to
                                    change the password.</small>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation">
                            </div>
                        </div>

                        @if($admin->id === 1)
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-triangle me-2"></i> This is the Super Admin. Access level cannot be
                                changed.
                            </div>
                            <input type="hidden" name="access_level" value="full">
                        @else
                            <div class="mb-3">
                                <label for="access_level" class="form-label">Access Level</label>
                                <select class="form-select @error('access_level') is-invalid @enderror" id="access_level"
                                    name="access_level" required onchange="togglePermissions()">
                                    <option value="full" {{ old('access_level', $admin->access_level) == 'full' ? 'selected' : '' }}>Full Access (Manage everything including admins)</option>
                                    <option value="limited" {{ old('access_level', $admin->access_level) == 'limited' ? 'selected' : '' }}>Limited Access (Manage specific modules)</option>
                                    <option value="viewer" {{ old('access_level', $admin->access_level) == 'viewer' ? 'selected' : '' }}>Only View (Read-only access to modules)</option>
                                </select>
                                @error('access_level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            @php
                                $perms = old('permissions', is_array($admin->permissions) ? $admin->permissions : []);
                            @endphp

                            <div class="mb-4" id="permissionsDiv"
                                style="display: {{ old('access_level', $admin->access_level) == 'limited' ? 'block' : 'none' }}; border: 1px solid #dee2e6; padding: 15px; border-radius: 5px;">
                                <label class="form-label fw-bold">Module Access</label>
                                <p class="text-muted small">Select which modules this admin can manage.</p>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="permissions[]" value="all"
                                        id="perm_all" {{ in_array('all', $perms) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perm_all">All Modules</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="permissions[]" value="products"
                                        id="perm_products" {{ in_array('products', $perms) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perm_products">Digital Products</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="permissions[]" value="services"
                                        id="perm_services" {{ in_array('services', $perms) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perm_services">Digital Services</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="permissions[]" value="blogs"
                                        id="perm_blogs" {{ in_array('blogs', $perms) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perm_blogs">Blogs</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="permissions[]" value="categories"
                                        id="perm_categories" {{ in_array('categories', $perms) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perm_categories">Categories</label>
                                </div>
                                @error('permissions') <div class="text-danger small mt-2">{{ $message }}</div> @enderror
                            </div>
                        @endif

                        <div class="mb-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $admin->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">Account Active</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Admin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePermissions() {
            var level = document.getElementById('access_level');
            if (level) {
                var div = document.getElementById('permissionsDiv');
                if (level.value === 'limited') {
                    div.style.display = 'block';
                } else {
                    div.style.display = 'none';
                }
            }
        }
    </script>
@endsection