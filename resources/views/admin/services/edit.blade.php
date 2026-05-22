@extends('admin.layouts.app')

@section('title', 'Edit Service')
@section('page-title', 'Edit Digital Service')

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 text-white">Edit Service: {{ $service->title }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.services.update', $service) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="title" class="form-label">Service Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $service->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="visibility" class="form-label d-block">Visibility</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="visibility" id="visibility_public" value="1" {{ old('visibility', $service->visibility) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="visibility_public">Public</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="visibility" id="visibility_private" value="0" {{ !old('visibility', $service->visibility) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="visibility_private">Private</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Tags</label>
                                <input type="text" class="form-control mb-2" placeholder="Add tag and press enter">
                                <div id="tags-container" class="d-flex flex-wrap gap-2">
                                    @if($service->tags)
                                        @foreach($service->tags as $tag)
                                        <span class="badge bg-primary d-flex align-items-center">
                                            {{ $tag }}
                                            <input type="hidden" name="tags[]" value="{{ $tag }}">
                                            <i class="fas fa-times ms-2 cursor-pointer remove-tag" style="cursor:pointer"></i>
                                        </span>
                                        @endforeach
                                    @endif
                                </div>
                                <small class="text-muted">Type tags for this product.</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-3 border">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 text-dark">Product Image</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="image_url" class="form-label">Main Cover Image URL</label>
                                        <input type="url" class="form-control @error('image_url') is-invalid @enderror" id="image_url" name="image_url" value="{{ old('image_url', $service->image_url) }}" required>
                                        <div id="image-preview" class="mt-2 text-center {{ $service->image_url ? '' : 'd-none' }}">
                                            <img src="{{ $service->image_url }}" class="img-thumbnail" style="max-height: 150px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 border">
                                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 text-dark">Product Gallery</h6>
                                    <button type="button" class="btn btn-sm btn-link p-0" id="add-gallery-item">Add Gallery Images</button>
                                </div>
                                <div class="card-body">
                                    <div id="gallery-container" class="row g-2">
                                        @if($service->gallery)
                                            @foreach($service->gallery as $index => $item)
                                            <div class="col-6 position-relative mb-3 gallery-item">
                                                <div class="border p-2 rounded bg-light">
                                                    <button type="button" class="btn-close btn-sm position-absolute top-0 end-0 m-1 remove-gallery"></button>
                                                    <input type="url" name="gallery[{{ $index }}][url]" class="form-control form-control-sm mb-2" value="{{ $item['url'] ?? '' }}" placeholder="Image URL">
                                                    <input type="text" name="gallery[{{ $index }}][caption]" class="form-control form-control-sm" value="{{ $item['caption'] ?? '' }}" placeholder="Caption">
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <small class="text-muted">Add multiple images for the product gallery.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Data Section -->
                    <div class="card mb-4 border shadow-sm">
                        <div class="card-header bg-white d-flex align-items-center">
                            <h6 class="mb-0 me-3">Product data —</h6>
                            <select name="product_type" id="product_type" class="form-select form-select-sm" style="width: auto;">
                                <option value="simple" {{ $service->product_type == 'simple' ? 'selected' : '' }}>Simple product</option>
                                <option value="grouped" {{ $service->product_type == 'grouped' ? 'selected' : '' }}>Grouped product</option>
                                <option value="external" {{ $service->product_type == 'external' ? 'selected' : '' }}>External/Affiliate product</option>
                                <option value="variable" {{ $service->product_type == 'variable' ? 'selected' : '' }}>Variable product</option>
                            </select>
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-0 bg-light border-end" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 200px; min-height: 300px;">
                                    <button class="nav-link active text-start rounded-0 border-bottom py-2 px-3" id="v-pills-general-tab" data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab"><i class="fas fa-wrench me-2"></i>General</button>
                                    <button class="nav-link text-start rounded-0 border-bottom py-2 px-3" id="v-pills-inventory-tab" data-bs-toggle="pill" data-bs-target="#v-pills-inventory" type="button" role="tab"><i class="fas fa-boxes me-2"></i>Inventory</button>
                                    <button class="nav-link text-start rounded-0 border-bottom py-2 px-3" id="v-pills-shipping-tab" data-bs-toggle="pill" data-bs-target="#v-pills-shipping" type="button" role="tab"><i class="fas fa-truck me-2"></i>Shipping</button>
                                    <button class="nav-link text-start rounded-0 border-bottom py-2 px-3" id="v-pills-linked-tab" data-bs-toggle="pill" data-bs-target="#v-pills-linked" type="button" role="tab"><i class="fas fa-link me-2"></i>Linked Products</button>
                                    <button class="nav-link text-start rounded-0 border-bottom py-2 px-3" id="v-pills-attributes-tab" data-bs-toggle="pill" data-bs-target="#v-pills-attributes" type="button" role="tab"><i class="fas fa-list me-2"></i>Attributes</button>
                                    <button class="nav-link text-start rounded-0 border-bottom py-2 px-3" id="v-pills-advanced-tab" data-bs-toggle="pill" data-bs-target="#v-pills-advanced" type="button" role="tab"><i class="fas fa-cog me-2"></i>Advanced</button>
                                </div>
                                <div class="tab-content flex-grow-1 p-4" id="v-pills-tabContent">
                                    <!-- General Tab -->
                                    <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Regular price ($)</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="product_data[general][regular_price]" class="form-control" value="{{ $service->product_data['general']['regular_price'] ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Sale price ($)</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="product_data[general][sale_price]" class="form-control" value="{{ $service->product_data['general']['sale_price'] ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Tax status</label>
                                            <div class="col-sm-6">
                                                <select name="product_data[general][tax_status]" class="form-select">
                                                    <option value="taxable" {{ ($service->product_data['general']['tax_status'] ?? '') == 'taxable' ? 'selected' : '' }}>Taxable</option>
                                                    <option value="shipping" {{ ($service->product_data['general']['tax_status'] ?? '') == 'shipping' ? 'selected' : '' }}>Shipping only</option>
                                                    <option value="none" {{ ($service->product_data['general']['tax_status'] ?? '') == 'none' ? 'selected' : '' }}>None</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Tax class</label>
                                            <div class="col-sm-6">
                                                <select name="product_data[general][tax_class]" class="form-select">
                                                    <option value="standard" {{ ($service->product_data['general']['tax_class'] ?? '') == 'standard' ? 'selected' : '' }}>Standard</option>
                                                    <option value="reduced" {{ ($service->product_data['general']['tax_class'] ?? '') == 'reduced' ? 'selected' : '' }}>Reduced rate</option>
                                                    <option value="zero" {{ ($service->product_data['general']['tax_class'] ?? '') == 'zero' ? 'selected' : '' }}>Zero rate</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Inventory Tab -->
                                    <div class="tab-pane fade" id="v-pills-inventory" role="tabpanel">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">SKU</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="service_id" class="form-control" value="{{ $service->service_id }}" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Manage stock?</label>
                                            <div class="col-sm-6 d-flex align-items-center">
                                                <input type="checkbox" name="product_data[inventory][manage_stock]" value="1" {{ ($service->product_data['inventory']['manage_stock'] ?? false) ? 'checked' : '' }} class="form-check-input mt-0">
                                                <label class="ms-2 mb-0">Enable stock management at product level</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Stock status</label>
                                            <div class="col-sm-6">
                                                <select name="product_data[inventory][stock_status]" class="form-select">
                                                    <option value="instock" {{ ($service->product_data['inventory']['stock_status'] ?? '') == 'instock' ? 'selected' : '' }}>In stock</option>
                                                    <option value="outofstock" {{ ($service->product_data['inventory']['stock_status'] ?? '') == 'outofstock' ? 'selected' : '' }}>Out of stock</option>
                                                    <option value="onbackorder" {{ ($service->product_data['inventory']['stock_status'] ?? '') == 'onbackorder' ? 'selected' : '' }}>On backorder</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Shipping Tab -->
                                    <div class="tab-pane fade" id="v-pills-shipping" role="tabpanel">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Weight (kg)</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="product_data[shipping][weight]" class="form-control" value="{{ $service->product_data['shipping']['weight'] ?? '' }}" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Dimensions (cm)</label>
                                            <div class="col-sm-9">
                                                <div class="row g-2">
                                                    <div class="col">
                                                        <input type="text" name="product_data[shipping][length]" class="form-control" value="{{ $service->product_data['shipping']['length'] ?? '' }}" placeholder="Length">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="product_data[shipping][width]" class="form-control" value="{{ $service->product_data['shipping']['width'] ?? '' }}" placeholder="Width">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="product_data[shipping][height]" class="form-control" value="{{ $service->product_data['shipping']['height'] ?? '' }}" placeholder="Height">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Linked Products Tab -->
                                    <div class="tab-pane fade" id="v-pills-linked" role="tabpanel">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Upsells</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="product_data[linked][upsells]" class="form-control" value="{{ $service->product_data['linked']['upsells'] ?? '' }}" placeholder="Search for a product...">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Cross-sells</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="product_data[linked][cross_sells]" class="form-control" value="{{ $service->product_data['linked']['cross_sells'] ?? '' }}" placeholder="Search for a product...">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Attributes Tab -->
                                    <div class="tab-pane fade" id="v-pills-attributes" role="tabpanel">
                                        <div class="text-center py-4 bg-light rounded">
                                            <p class="text-muted mb-3">Custom product attributes can be added here.</p>
                                            <button type="button" class="btn btn-outline-secondary btn-sm">Add Attribute</button>
                                        </div>
                                    </div>

                                    <!-- Advanced Tab -->
                                    <div class="tab-pane fade" id="v-pills-advanced" role="tabpanel">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Purchase note</label>
                                            <div class="col-sm-9">
                                                <textarea name="product_data[advanced][purchase_note]" class="form-control" rows="2">{{ $service->product_data['advanced']['purchase_note'] ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Menu order</label>
                                            <div class="col-sm-3">
                                                <input type="number" name="sort_order" class="form-control" value="{{ $service->sort_order }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Enable reviews</label>
                                            <div class="col-sm-6 d-flex align-items-center">
                                                <input type="checkbox" name="product_data[advanced][enable_reviews]" value="1" {{ ($service->product_data['advanced']['enable_reviews'] ?? true) ? 'checked' : '' }} class="form-check-input mt-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-top mt-4 pt-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $service->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <h5 class="mb-3 text-primary">Content Sections</h5>
                            
                            <!-- Detailed HTML Description -->
                            <div class="mb-4">
                                <label for="detailed_description" class="form-label">Detailed Content (HTML allowed)</label>
                                <textarea class="form-control @error('detailed_description') is-invalid @enderror" id="detailed_description" name="detailed_description" rows="10">{{ old('detailed_description', $service->detailed_description) }}</textarea>
                            </div>

                            <hr>

                            <!-- Top Blocks Repeater -->
                            <div class="mb-4">
                                <label class="form-label d-flex justify-content-between align-items-center">
                                    Icon Highlights
                                    <button type="button" class="btn btn-sm btn-outline-primary" id="add-top-block">+ Add Highlight</button>
                                </label>
                                <div id="top-blocks-container">
                                    @if($service->description_top_blocks)
                                        @foreach($service->description_top_blocks as $index => $block)
                                        <div class="border p-3 mb-3 bg-light rounded position-relative">
                                            <button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-block"></button>
                                            <div class="row g-2">
                                                <div class="col-md-3">
                                                    <input type="text" name="description_top_blocks[{{ $index }}][icon]" class="form-control form-control-sm" value="{{ $block['icon'] ?? '' }}" placeholder="Icon">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="description_top_blocks[{{ $index }}][title]" class="form-control form-control-sm" value="{{ $block['title'] ?? '' }}" placeholder="Title">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" name="description_top_blocks[{{ $index }}][text]" class="form-control form-control-sm" value="{{ $block['text'] ?? '' }}" placeholder="Text">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4 border-top pt-4">
                        <a href="{{ route('admin.services.index') }}" class="btn btn-light">Back to List</a>
                        <button type="submit" class="btn btn-primary px-5">Update Digital Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
#v-pills-tab .nav-link {
    color: #555;
    background-color: transparent;
    border-radius: 0;
}
#v-pills-tab .nav-link.active {
    color: #2271b1;
    background-color: #fff;
    border-right: 4px solid #2271b1 !important;
}
#v-pills-tab .nav-link:hover:not(.active) {
    background-color: #f0f0f1;
}
#v-pills-tabContent {
    background-color: #fff;
}
.form-label {
    font-weight: 600;
}
.card-header h6 {
    font-size: 14px;
    font-weight: 700;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image Preview
    const imageInput = document.getElementById('image_url');
    const previewDiv = document.getElementById('image-preview');
    const previewImg = previewDiv.querySelector('img');

    imageInput.addEventListener('input', function() {
        if (this.value) {
            previewImg.src = this.value;
            previewDiv.classList.remove('d-none');
        } else {
            previewDiv.classList.add('d-none');
        }
    });

    // Gallery Logic
    let galleryIndex = {{ $service->gallery ? count($service->gallery) : 0 }};
    document.getElementById('add-gallery-item').addEventListener('click', () => {
        const container = document.getElementById('gallery-container');
        const col = document.createElement('div');
        col.className = 'col-6 position-relative mb-3 gallery-item';
        col.innerHTML = `
            <div class="border p-2 rounded bg-light">
                <button type="button" class="btn-close btn-sm position-absolute top-0 end-0 m-1 remove-gallery"></button>
                <input type="url" name="gallery[${galleryIndex}][url]" class="form-control form-control-sm mb-2" placeholder="Image URL">
                <input type="text" name="gallery[${galleryIndex}][caption]" class="form-control form-control-sm" placeholder="Caption">
            </div>
        `;
        container.appendChild(col);
        galleryIndex++;
    });

    // Tags Logic
    const tagInput = document.querySelector('input[placeholder="Add tag and press enter"]');
    const tagsContainer = document.getElementById('tags-container');
    
    tagInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            const tag = this.value.trim();
            if (tag) {
                addTag(tag);
                this.value = '';
            }
        }
    });

    function addTag(text) {
        const span = document.createElement('span');
        span.className = 'badge bg-primary d-flex align-items-center';
        span.innerHTML = `
            ${text}
            <input type="hidden" name="tags[]" value="${text}">
            <i class="fas fa-times ms-2 cursor-pointer remove-tag" style="cursor:pointer"></i>
        `;
        tagsContainer.appendChild(span);
    }

    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-tag')) {
            e.target.parentElement.remove();
        }
        if (e.target.classList.contains('remove-gallery')) {
            e.target.closest('.gallery-item').remove();
        }
    });

    // Top Blocks Logic (Keeping existing)
    let topBlockIndex = {{ $service->description_top_blocks ? count($service->description_top_blocks) : 0 }};
    document.getElementById('add-top-block').addEventListener('click', () => {
        const container = document.getElementById('top-blocks-container');
        const div = document.createElement('div');
        div.className = 'border p-3 mb-3 bg-light rounded position-relative';
        div.innerHTML = `
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-block"></button>
            <div class="row g-2">
                <div class="col-md-3">
                    <input type="text" name="description_top_blocks[${topBlockIndex}][icon]" class="form-control form-control-sm" placeholder="Icon (e.g. fas fa-user)">
                </div>
                <div class="col-md-4">
                    <input type="text" name="description_top_blocks[${topBlockIndex}][title]" class="form-control form-control-sm" placeholder="Title">
                </div>
                <div class="col-md-5">
                    <input type="text" name="description_top_blocks[${topBlockIndex}][text]" class="form-control form-control-sm" placeholder="Description Text">
                </div>
            </div>
        `;
        container.appendChild(div);
        topBlockIndex++;
    });

    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-block')) {
            e.target.closest('.border').remove();
        }
    });
});
</script>
@endsection
