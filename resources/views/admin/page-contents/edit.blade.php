@extends('admin.layouts.app')

@section('title', 'Edit Page Section')
@section('page-title', 'Edit Page Section')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit Section: {{ $pageContent->section_slug }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.page-contents.update', $pageContent) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Page Slug</label>
                            <input type="text" name="page_slug" class="form-control" value="{{ $pageContent->page_slug }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Section Slug</label>
                            <input type="text" name="section_slug" class="form-control" value="{{ $pageContent->section_slug }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $pageContent->title }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" value="{{ $pageContent->subtitle }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" class="form-control" rows="5">{{ $pageContent->content }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Button Text</label>
                            <input type="text" name="button_text" class="form-control" value="{{ $pageContent->button_text }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Button Link</label>
                            <input type="text" name="button_link" class="form-control" value="{{ $pageContent->button_link }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image URL</label>
                        <input type="text" name="image_url" class="form-control" value="{{ $pageContent->image_url }}">
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" class="form-check-input" value="1" {{ $pageContent->is_active ? 'checked' : '' }}>
                        <label class="form-check-label">Is Active</label>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Section</button>
                        <a href="{{ route('admin.page-contents.index') }}" class="btn btn-light border ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
