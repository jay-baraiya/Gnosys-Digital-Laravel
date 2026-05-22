@extends('admin.layouts.app')

@section('title', 'Digital Services')
@section('page-title', 'Digital Services Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>Manage Digital Services</h4>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i> Add New Service
    </a>
</div>

<!-- Search and Filter -->
<div class="card mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.services.index') }}">
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search services..." value="{{ request('search') }}">
                </div>
                <div class="col-md-4">
                    <select name="category" class="form-select text-white" style="background-color: var(--sidebar-bg); border-color: rgba(255,255,255,0.1);">
                        <option value="">All Categories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-outline-primary w-100">
                        <i class="fas fa-search me-1"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Services Table -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-cogs me-2"></i> All Services ({{ $services->total() }})
        </h5>
    </div>
    <div class="card-body">
        @if($services->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>SKU</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Visibility</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $service->image_url }}" alt="{{ $service->title }}" 
                                         class="rounded me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div class="fw-bold">{{ \Illuminate\Support\Str::limit($service->title, 30) }}</div>
                                </div>
                            </td>
                            <td><small>{{ $service->service_id }}</small></td>
                            <td><span class="badge bg-light text-dark border">{{ ucfirst($service->product_type) }}</span></td>
                            <td>
                                @php 
                                    $reg_price = $service->product_data['general']['regular_price'] ?? $service->price;
                                    $sale_price = $service->product_data['general']['sale_price'] ?? null;
                                @endphp
                                @if($sale_price)
                                    <del class="text-muted small">${{ $reg_price }}</del> <strong>${{ $sale_price }}</strong>
                                @else
                                    <strong>${{ $reg_price ?: '0.00' }}</strong>
                                @endif
                            </td>
                            <td>
                                @if($service->categoryRelationship)
                                    <span class="badge bg-info text-dark">{{ $service->categoryRelationship->name }}</span>
                                @else
                                    <span class="badge bg-secondary">{{ $service->category }}</span>
                                @endif
                            </td>
                            <td>
                                @if($service->visibility)
                                    <span class="badge bg-success">Public</span>
                                @else
                                    <span class="badge bg-warning text-dark">Private</span>
                                @endif
                            </td>
                            <td>
                                <div class="table-actions">
                                    <button type="button" class="btn btn-sm btn-outline-info view-service" 
                                            data-service="{{ json_encode($service) }}" 
                                            data-bs-toggle="modal" data-bs-target="#viewServiceModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" class="d-inline" 
                                          onsubmit="return confirm('Are you sure you want to delete this service?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $services->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No services found</h5>
                <p class="text-muted">Get started by adding your first digital service.</p>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i> Add First Service
                </a>
            </div>
        @endif
    </div>
</div>

<!-- View Service Modal -->
<div class="modal fade" id="viewServiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalTitle">Service Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-md-4 bg-light p-4 text-center border-end">
                        <img id="modalImage" src="" class="img-fluid rounded shadow-sm mb-3" style="max-height: 200px; object-fit: cover;">
                        <h4 id="modalName" class="mb-1"></h4>
                        <p id="modalCategory" class="text-muted mb-3"></p>
                        <div class="d-grid gap-2">
                            <span id="modalStatus" class="badge p-2"></span>
                            <span id="modalType" class="badge bg-dark p-2"></span>
                        </div>
                    </div>
                    <div class="col-md-8 p-0">
                        <div class="modal-content-wrapper d-flex flex-column h-100">
                            <!-- Modal Tabs -->
                            <ul class="nav nav-tabs px-3 pt-3 bg-light border-bottom" id="modalDataTabs" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active py-2 small fw-bold" id="tab-overview-link" data-bs-toggle="tab" data-bs-target="#tab-overview" type="button">Overview</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-2 small fw-bold" id="tab-pricing-link" data-bs-toggle="tab" data-bs-target="#tab-pricing" type="button">Pricing & Stock</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-2 small fw-bold" id="tab-shipping-link" data-bs-toggle="tab" data-bs-target="#tab-shipping" type="button">Shipping & Links</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-2 small fw-bold" id="tab-advanced-link" data-bs-toggle="tab" data-bs-target="#tab-advanced" type="button">Attributes & Adv.</button>
                                </li>
                            </ul>

                            <div class="tab-content p-4 modal-details-scroll" style="max-height: 450px; overflow-y: auto;">
                                <!-- Overview Tab -->
                                <div class="tab-pane fade show active" id="tab-overview" role="tabpanel">
                                    <div class="mb-4">
                                        <small class="text-muted text-uppercase fw-bold" style="font-size: 10px;">Description</small>
                                        <p id="modalDescription" class="mb-0 mt-1 small"></p>
                                    </div>

                                    <div id="modalHighlightsSection" class="mb-4 d-none">
                                        <small class="text-muted text-uppercase fw-bold" style="font-size: 10px;">Icon Highlights</small>
                                        <div id="modalHighlights" class="row g-2 mt-1"></div>
                                    </div>

                                    <div id="modalTagsSection" class="mb-4 d-none">
                                        <small class="text-muted text-uppercase fw-bold" style="font-size: 10px;">Tags</small>
                                        <div id="modalTags" class="d-flex flex-wrap gap-1 mt-1"></div>
                                    </div>

                                    <div id="modalGallerySection" class="mb-0 d-none">
                                        <small class="text-muted text-uppercase fw-bold" style="font-size: 10px;">Gallery</small>
                                        <div id="modalGallery" class="row g-2 mt-1"></div>
                                    </div>
                                </div>

                                <!-- Pricing & Stock Tab -->
                                <div class="tab-pane fade" id="tab-pricing" role="tabpanel">
                                    <div class="card bg-light border-0 mb-3">
                                        <div class="card-body p-3">
                                            <h6 class="small fw-bold mb-3 border-bottom pb-2 text-primary">Pricing Details</h6>
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Regular Price</small>
                                                    <span id="modalRegPrice" class="fw-bold"></span>
                                                </div>
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Sale Price</small>
                                                    <span id="modalSalePrice" class="fw-bold text-success"></span>
                                                </div>
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Tax Status</small>
                                                    <span id="modalTaxStatus" class="fw-bold"></span>
                                                </div>
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Tax Class</small>
                                                    <span id="modalTaxClass" class="fw-bold"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-light border-0">
                                        <div class="card-body p-3">
                                            <h6 class="small fw-bold mb-3 border-bottom pb-2 text-primary">Inventory Settings</h6>
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <small class="text-muted d-block">SKU</small>
                                                    <span id="modalSKU2" class="fw-bold"></span>
                                                </div>
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Stock Status</small>
                                                    <span id="modalStockStatus" class="badge bg-white text-dark border"></span>
                                                </div>
                                                <div class="col-12">
                                                    <small class="text-muted d-block">Stock Management</small>
                                                    <span id="modalManageStock" class="fw-bold"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shipping & Linked Tab -->
                                <div class="tab-pane fade" id="tab-shipping" role="tabpanel">
                                    <div class="card bg-light border-0 mb-3">
                                        <div class="card-body p-3">
                                            <h6 class="small fw-bold mb-3 border-bottom pb-2 text-primary">Shipping Info</h6>
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Weight</small>
                                                    <span id="modalWeight" class="fw-bold"></span>
                                                </div>
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Dimensions (L x W x H)</small>
                                                    <span id="modalDimensions" class="fw-bold"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-light border-0">
                                        <div class="card-body p-3">
                                            <h6 class="small fw-bold mb-3 border-bottom pb-2 text-primary">Linked Products</h6>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <small class="text-muted d-block">Upsells</small>
                                                    <span id="modalUpsells" class="fw-bold text-muted small">None</span>
                                                </div>
                                                <div class="col-12">
                                                    <small class="text-muted d-block">Cross-sells</small>
                                                    <span id="modalCrossSells" class="fw-bold text-muted small">None</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Attributes & Advanced Tab -->
                                <div class="tab-pane fade" id="tab-advanced" role="tabpanel">
                                    <div class="card bg-light border-0 mb-3">
                                        <div class="card-body p-3">
                                            <h6 class="small fw-bold mb-3 border-bottom pb-2 text-primary">Advanced Features</h6>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <small class="text-muted d-block">Purchase Note</small>
                                                    <p id="modalPurchaseNote" class="mb-0 small"></p>
                                                </div>
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Menu Order</small>
                                                    <span id="modalMenuOrder" class="fw-bold"></span>
                                                </div>
                                                <div class="col-6">
                                                    <small class="text-muted d-block">Reviews Enabled</small>
                                                    <span id="modalEnableReviews" class="fw-bold"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-light border-0">
                                        <div class="card-body p-3 text-center">
                                            <small class="text-muted">Custom attributes will appear here once configured.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a id="modalEditBtn" href="" class="btn btn-primary">Edit Service</a>
            </div>
        </div>
    </div>
</div>

<style>
.modal-details-scroll::-webkit-scrollbar {
    width: 5px;
}
.modal-details-scroll::-webkit-scrollbar-track {
    background: #f1f1f1;
}
.modal-details-scroll::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 10px;
}
.highlight-card {
    background: #fff;
    border: 1px solid #eee;
    padding: 10px;
    border-radius: 8px;
    height: 100%;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const viewButtons = document.querySelectorAll('.view-service');
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');
    const modalName = document.getElementById('modalName');
    const modalCategory = document.getElementById('modalCategory');
    const modalStatus = document.getElementById('modalStatus');
    const modalType = document.getElementById('modalType');
    const modalSKU2 = document.getElementById('modalSKU2');
    const modalRegPrice = document.getElementById('modalRegPrice');
    const modalSalePrice = document.getElementById('modalSalePrice');
    const modalTaxStatus = document.getElementById('modalTaxStatus');
    const modalTaxClass = document.getElementById('modalTaxClass');
    const modalManageStock = document.getElementById('modalManageStock');
    const modalStockStatus = document.getElementById('modalStockStatus');
    const modalWeight = document.getElementById('modalWeight');
    const modalDimensions = document.getElementById('modalDimensions');
    const modalUpsells = document.getElementById('modalUpsells');
    const modalCrossSells = document.getElementById('modalCrossSells');
    const modalPurchaseNote = document.getElementById('modalPurchaseNote');
    const modalMenuOrder = document.getElementById('modalMenuOrder');
    const modalEnableReviews = document.getElementById('modalEnableReviews');
    const modalEditBtn = document.getElementById('modalEditBtn');

    viewButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            try {
                const service = JSON.parse(this.dataset.service);
                const data = service.product_data || {};
                
                if (modalTitle) modalTitle.textContent = `Viewing: ${service.title}`;
                if (modalImage) modalImage.src = service.image_url || '';
                if (modalName) modalName.textContent = service.title || '';
                if (modalCategory) modalCategory.textContent = service.category || 'Uncategorized';
                
                if (modalStatus) {
                    modalStatus.textContent = service.visibility ? 'PUBLIC' : 'PRIVATE';
                    modalStatus.className = `badge p-2 ${service.visibility ? 'bg-success' : 'bg-warning text-dark'}`;
                }
                
                if (modalType) modalType.textContent = (service.product_type || 'simple').toUpperCase();
                if (modalSKU2) modalSKU2.textContent = service.service_id || 'N/A';
                
                // Pricing Tab
                const reg = data.general?.regular_price || service.price || '0.00';
                const sale = data.general?.sale_price;
                if (modalRegPrice) modalRegPrice.textContent = `$${reg}`;
                if (modalSalePrice) modalSalePrice.textContent = sale ? `$${sale}` : 'N/A';
                if (modalTaxStatus) modalTaxStatus.textContent = (data.general?.tax_status || 'taxable').toUpperCase();
                if (modalTaxClass) modalTaxClass.textContent = (data.general?.tax_class || 'standard').toUpperCase();

                // Stock Management
                if (modalManageStock) modalManageStock.textContent = data.inventory?.manage_stock ? 'Yes (Managed at product level)' : 'No';
                if (modalStockStatus) {
                    const stock = data.inventory?.stock_status || 'instock';
                    modalStockStatus.textContent = stock.replace('instock', 'In Stock').replace('outofstock', 'Out of Stock').replace('onbackorder', 'Backorder');
                    modalStockStatus.className = `badge bg-white border ${stock === 'instock' ? 'text-success' : 'text-danger'}`;
                }

                // Overview Tab
                if (modalDescription) modalDescription.textContent = service.description || 'No description provided.';
                
                // Highlights
                if (modalHighlights && modalHighlightsSection) {
                    modalHighlights.innerHTML = '';
                    if (service.description_top_blocks && Array.isArray(service.description_top_blocks) && service.description_top_blocks.length > 0) {
                        modalHighlightsSection.classList.remove('d-none');
                        service.description_top_blocks.forEach(block => {
                            const col = document.createElement('div');
                            col.className = 'col-md-6';
                            col.innerHTML = `
                                <div class="highlight-card d-flex align-items-center mb-2">
                                    <i class="${block.icon || 'fas fa-check'} text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold" style="font-size: 11px;">${block.title || ''}</div>
                                        <div class="text-muted" style="font-size: 10px;">${block.text || ''}</div>
                                    </div>
                                </div>
                            `;
                            modalHighlights.appendChild(col);
                        });
                    } else {
                        modalHighlightsSection.classList.add('d-none');
                    }
                }

                // Tags
                if (modalTags && modalTagsSection) {
                    modalTags.innerHTML = '';
                    if (service.tags && Array.isArray(service.tags) && service.tags.length > 0) {
                        modalTagsSection.classList.remove('d-none');
                        service.tags.forEach(tag => {
                            const span = document.createElement('span');
                            span.className = 'badge bg-light text-dark border px-2 py-1 me-1 mb-1';
                            span.style.fontSize = '10px';
                            span.textContent = tag;
                            modalTags.appendChild(span);
                        });
                    } else {
                        modalTagsSection.classList.add('d-none');
                    }
                }

                // Gallery
                if (modalGallery && modalGallerySection) {
                    modalGallery.innerHTML = '';
                    if (service.gallery && Array.isArray(service.gallery) && service.gallery.length > 0) {
                        modalGallerySection.classList.remove('d-none');
                        service.gallery.forEach(item => {
                            const col = document.createElement('div');
                            col.className = 'col-4 mb-2';
                            col.innerHTML = `
                                <img src="${item.url}" class="img-fluid rounded shadow-sm border" style="height: 60px; width: 100%; object-fit: cover;" title="${item.caption || ''}">
                            `;
                            modalGallery.appendChild(col);
                        });
                    } else {
                        modalGallerySection.classList.add('d-none');
                    }
                }

                // Shipping & Links Tab
                if (modalWeight) modalWeight.textContent = (data.shipping?.weight || '0') + ' kg';
                if (modalDimensions) {
                    const l = data.shipping?.length || '0';
                    const w = data.shipping?.width || '0';
                    const h = data.shipping?.height || '0';
                    modalDimensions.textContent = `${l} x ${w} x ${h} cm`;
                }
                if (modalUpsells) modalUpsells.textContent = data.linked?.upsells || 'None';
                if (modalCrossSells) modalCrossSells.textContent = data.linked?.cross_sells || 'None';

                // Advanced Tab
                if (modalPurchaseNote) modalPurchaseNote.textContent = data.advanced?.purchase_note || 'No purchase note.';
                if (modalMenuOrder) modalMenuOrder.textContent = service.sort_order || '0';
                if (modalEnableReviews) modalEnableReviews.textContent = data.advanced?.enable_reviews !== false ? 'Yes' : 'No';

                if (modalEditBtn) {
                    modalEditBtn.href = `{{ url('admin/services') }}/${service.id}/edit`;
                }

                // Reset tabs to first one when opening
                const firstTab = document.querySelector('#modalDataTabs button:first-child');
                if (firstTab) {
                    const tab = new bootstrap.Tab(firstTab);
                    tab.show();
                }

            } catch (e) {
                console.error("Error parsing service data:", e);
            }
        });
    });
});
</script>
@endsection
