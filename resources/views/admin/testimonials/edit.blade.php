@extends('admin.layouts.app')

@section('title', 'Edit Testimonial')
@section('page-title', 'Edit Testimonial')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit Testimonial from {{ $testimonial->client_name }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Client Name</label>
                            <input type="text" name="client_name" class="form-control" value="{{ $testimonial->client_name }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Client Designation</label>
                            <input type="text" name="client_designation" class="form-control" value="{{ $testimonial->client_designation }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rating (1-5)</label>
                        <select name="rating" class="form-select">
                            @for($i=1; $i<=5; $i++)
                                <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>{{ $i }} Stars</option>
                            @endfor
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" class="form-control" rows="5" required>{{ $testimonial->content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Client Image URL</label>
                        <input type="text" name="client_image" class="form-control" value="{{ $testimonial->client_image }}">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" value="{{ $testimonial->sort_order }}">
                        </div>
                        <div class="col-md-6 d-flex align-items-end">
                            <div class="form-check form-switch mb-2">
                                <input type="hidden" name="is_active" value="0">
                                <input type="checkbox" name="is_active" class="form-check-input" value="1" {{ $testimonial->is_active ? 'checked' : '' }}>
                                <label class="form-check-label">Is Active</label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Testimonial</button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-light border ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
