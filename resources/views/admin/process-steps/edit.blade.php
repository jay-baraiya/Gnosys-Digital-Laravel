@extends('admin.layouts.app')

@section('title', 'Edit Process Step')
@section('page-title', 'Edit Process Step')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit Step #{{ $processStep->order }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.process-steps.update', $processStep) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Order</label>
                            <input type="number" name="order" class="form-control" value="{{ $processStep->order }}" required>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $processStep->title }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4">{{ $processStep->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Icon Class</label>
                        <input type="text" name="icon" class="form-control" value="{{ $processStep->icon }}">
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" class="form-check-input" value="1" {{ $processStep->is_active ? 'checked' : '' }}>
                        <label class="form-check-label">Is Active</label>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Step</button>
                        <a href="{{ route('admin.process-steps.index') }}" class="btn btn-light border ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
