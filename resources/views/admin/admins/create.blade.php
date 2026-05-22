@extends('admin.layouts.app')

@section('title', 'Add Admin')
@section('page-title', 'Add New Administrator')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-user-plus me-2"></i> New Admin Details</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.admins.store') }}" method="POST">
                    @csrf
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="access_level" class="form-label">Access Level</label>
                        <select class="form-select @error('access_level') is-invalid @enderror" id="access_level" name="access_level" required onchange="togglePermissions()">
                            <option value="full" {{ old('access_level') == 'full' ? 'selected' : '' }}>Full Access (Manage everything including admins)</option>
                            <option value="limited" {{ old('access_level') == 'limited' ? 'selected' : '' }}>Limited Access (Manage specific modules)</option>
                            <option value="viewer" {{ old('access_level') == 'viewer' ? 'selected' : '' }}>Only View (Read-only access to modules)</option>
                        </select>
                        @error('access_level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-4" id="permissionsDiv" style="display: {{ old('access_level') == 'limited' ? 'block' : 'none' }}; border: 1px solid #dee2e6; padding: 15px; border-radius: 5px;">
                        <label class="form-label fw-bold">Module Access</label>
                        <p class="text-muted small">Select which modules this admin can manage.</p>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="all" id="perm_all" {{ in_array('all', old('permissions', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="perm_all">All Modules</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="products" id="perm_products" {{ in_array('products', old('permissions', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="perm_products">Digital Products</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="services" id="perm_services" {{ in_array('services', old('permissions', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="perm_services">Digital Services</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="blogs" id="perm_blogs" {{ in_array('blogs', old('permissions', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="perm_blogs">Blogs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="categories" id="perm_categories" {{ in_array('categories', old('permissions', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="perm_categories">Categories</label>
                        </div>
                        @error('permissions') <div class="text-danger small mt-2">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">Account Active</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePermissions() {
        var level = document.getElementById('access_level').value;
        var div = document.getElementById('permissionsDiv');
        if (level === 'limited') {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    }
</script>
@endsection
