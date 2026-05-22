@extends('admin.layouts.app')

@section('title', 'Edit Feature')
@section('page-title', 'Edit Feature')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit Feature: {{ $feature->title }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.features.update', $feature) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $feature->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ $feature->description }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Icon (FontAwesome class)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="{{ $feature->icon }}"></i></span>
                                <input type="text" name="icon" class="form-control" value="{{ $feature->icon }}">
                            </div>
                            <small class="text-muted">Example: fas fa-rocket</small>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Page</label>
                            <select name="page" class="form-select">
                                <option value="home" {{ $feature->page == 'home' ? 'selected' : '' }}>Home</option>
                                <option value="about" {{ $feature->page == 'about' ? 'selected' : '' }}>About</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" value="{{ $feature->sort_order }}">
                        </div>
                        <div class="col-md-6 d-flex align-items-end">
                            <div class="form-check form-switch mb-2">
                                <input type="hidden" name="is_active" value="0">
                                <input type="checkbox" name="is_active" class="form-check-input" value="1" {{ $feature->is_active ? 'checked' : '' }}>
                                <label class="form-check-label">Is Active</label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Feature</button>
                        <a href="{{ route('admin.features.index') }}" class="btn btn-light border ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
