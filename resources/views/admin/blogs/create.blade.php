@extends('admin.layouts.app')

@section('title', 'New Blog Post')
@section('page-title', 'Create New Blog Post')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-pen-nib me-2"></i> Post Content</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" id="blogForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Post Title</label>
                            <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title') }}" placeholder="Enter title here" required>
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label fw-bold">Subtitle / Excerpt</label>
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                                name="subtitle" value="{{ old('subtitle') }}" placeholder="Short summary of the post">
                            @error('subtitle') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="editor" class="form-label fw-bold">Content</label>
                            <div id="editor-container">
                                <textarea name="content" id="editor"
                                    class="@error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                            </div>
                            @error('content') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <!-- Settings Card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-cog me-2"></i> Settings</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="category_id" class="form-label fw-bold">Category</label>
                        <select class="form-select @error('category_id') is-invalid @enderror" id="category_id"
                            name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label fw-bold">Tags</label>
                        <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') }}"
                            placeholder="tag1, tag2...">
                        <small class="text-muted">Comma separated</small>
                    </div>

                    <div class="mb-3">
                        <label for="is_published" class="form-label fw-bold">Status</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1"
                                {{ old('is_published', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_published">Published</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Media Card -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-image me-2"></i> Media</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="cover_image_file" class="form-label fw-bold">Upload Cover Image</label>
                        <input type="file" class="form-control @error('cover_image_file') is-invalid @enderror"
                            id="cover_image_file" name="cover_image_file" accept="image/*">
                        @error('cover_image_file') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="cover_image" class="form-label fw-bold">OR Cover Image URL</label>
                        <input type="url" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                            name="cover_image" value="{{ old('cover_image') }}" placeholder="https://example.com/image.jpg">
                        @error('cover_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div id="image-preview" class="mt-2 text-center {{ old('cover_image') ? '' : 'd-none' }}">
                        <img src="{{ old('cover_image') }}" alt="Preview" class="img-fluid rounded border">
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary w-100 mb-2">Publish Post</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary w-100">Cancel</a>
            </div>
            </form>
        </div>
    </div>

    <!-- CKEditor 5 CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>

    <script>
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }

            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();
                xhr.open('POST', "{{ route('admin.blogs.upload') }}", true);
                xhr.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');
                xhr.responseType = 'json';
            }

            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${file.name}.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;
                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }
                    resolve({
                        default: response.url
                    });
                });

                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            _sendRequest(file) {
                const data = new FormData();
                data.append('upload', file);
                this.xhr.send(data);
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }

        ClassicEditor
            .create(document.querySelector('#editor'), {
                extraPlugins: [MyCustomUploadAdapterPlugin],
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'imageUpload', 'link', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
                    'undo', 'redo'
                ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                    ]
                }
            })
            .catch(error => {
                console.error(error);
            });

        // Image preview logic
        document.getElementById('cover_image').addEventListener('input', function () {
            var url = this.value;
            var preview = document.getElementById('image-preview');
            var img = preview.querySelector('img');

            if (url) {
                img.src = url;
                preview.classList.remove('d-none');
            } else {
                preview.classList.add('d-none');
            }
        });

        document.getElementById('cover_image_file').addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    var preview = document.getElementById('image-preview');
                    var img = preview.querySelector('img');
                    img.src = e.target.result;
                    preview.classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection