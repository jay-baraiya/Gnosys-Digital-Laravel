<table class="table table-bordered table-hover mb-0">
    <thead class="table-light">
        <tr>
            <th>Product Name</th>
            <th>Type</th>
            <th class="text-center">Quantity</th>
            <th class="text-end">Price</th>
            <th class="text-end">Total</th>
        </tr>
    </thead>
    <tbody>
        @forelse($order->orderItems as $item)
            <tr>
                <td>{{ $item->product_title ?? 'N/A' }}</td>
                <td>
                    <span class="badge bg-secondary">{{ ucfirst($item->product_type ?? 'product') }}</span>
                </td>
                <td class="text-center">{{ $item->quantity }}</td>
                <td class="text-end">₹{{ number_format($item->price, 2) }}</td>
                <td class="text-end fw-bold">₹{{ number_format($item->total_amount, 2) }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted">No items found for this order.</td>
            </tr>
        @endforelse
    </tbody>
    <tfoot class="table-light">
        <tr>
            <th colspan="4" class="text-end">Subtotal:</th>
            <th class="text-end text-primary">₹{{ number_format($order->subtotal, 2) }}</th>
        </tr>
    </tfoot>
</table>
