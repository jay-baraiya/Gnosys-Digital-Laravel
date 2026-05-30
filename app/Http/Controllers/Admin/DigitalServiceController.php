<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalService;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Support\Str;

class DigitalServiceController extends Controller
{
    /**
     * Display a listing of the digital services.
     */
    public function index(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('services')) {
            return abort(403, 'Unauthorized action.');
        }

        $query = DigitalService::query();

        // Filter by category
        if ($request->category) {
            $query->byCategory($request->category);
        }

        // Search functionality
        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        $services = $query->ordered()->paginate(10);
        $categories = Category::where('type', 'service')->get();

        return view('admin.services.index', compact('services', 'categories'));
    }

    public function create(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('services', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $categories = Category::where('type', 'service')->get();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created digital service in storage.
     */
    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('services', 'create')) {
            return abort(403, 'Unauthorized action.');
        }
        $request->validate([
            'packages' => 'nullable|array',
            'packages.*.package_name' => 'required|string|max:255',
            'packages.*.price' => 'nullable|string|max:255',
            'packages.*.description' => 'nullable|string',
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'required|string',
            'description_top_blocks' => 'nullable|array',
            'service_features_grid' => 'nullable|array',
            'process_steps' => 'nullable|array',
            'detailed_description' => 'nullable|string',
            'price' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory' => 'nullable|string',
            'image_url' => 'required|url',
            'features' => 'nullable|array',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
            'tags' => 'nullable|array',
            'gallery' => 'nullable|array',
            'product_type' => 'nullable|string',
            'product_data' => 'nullable|array',
            'visibility' => 'boolean',
        ]);

        $service = DigitalService::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'description_top_blocks' => $request->description_top_blocks,
            'service_features_grid' => $request->service_features_grid,
            'process_steps' => $request->process_steps,
            'detailed_description' => $request->detailed_description,
            'price' => $request->price,
            'badge' => $request->badge,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'category' => Category::find($request->category_id)->name,
            'subcategory' => $request->subcategory,
            'image_url' => $request->image_url,
            'features' => $request->features,
            'service_id' => $request->service_id,
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $request->sort_order ?? 0,
            'tags' => $request->tags,
            'gallery' => $request->gallery,
            'product_type' => $request->product_type ?? 'simple',
            'product_data' => $request->product_data,
            'visibility' => $request->boolean('visibility', true),
        ]);

        if ($request->packages) {

            foreach ($request->packages as $package) {

                Package::create([
                    'digital_service_id' => $service->id,
                    'package_name' => $package['package_name'],
                    'price' => $package['price'] ?? null,
                    'description' => $package['description'] ?? null,
                ]);
            }
        }

        return redirect()->route('admin.services.index')
            ->with('success', 'Digital service created successfully!');
    }

    /**
     * Show the form for editing the specified digital service.
     */
    public function edit(DigitalService $service)
    {
        if (!auth('admin')->user()->hasPermission('services', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $categories = Category::where('type', 'service')->get();
        return view('admin.services.edit', compact('service', 'categories'));
    }

    /**
     * Update the specified digital service in storage.
     */
    public function update(Request $request, DigitalService $service)
    {
        if (!auth('admin')->user()->hasPermission('services', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'packages' => 'nullable|array',
            'packages.*.package_name' => 'required|string|max:255',
            'packages.*.price' => 'nullable|string|max:255',
            'packages.*.description' => 'nullable|string',
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'required|string',
            'description_top_blocks' => 'nullable|array',
            'service_features_grid' => 'nullable|array',
            'process_steps' => 'nullable|array',
            'detailed_description' => 'nullable|string',
            'price' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory' => 'nullable|string',
            'image_url' => 'required|url',
            'features' => 'nullable|array',
            'service_id' => 'required|string|unique:digital_services,service_id,' . $service->id,
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
            'tags' => 'nullable|array',
            'gallery' => 'nullable|array',
            'product_type' => 'nullable|string',
            'product_data' => 'nullable|array',
            'visibility' => 'boolean',
        ]);

        $service->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'description_top_blocks' => $request->description_top_blocks,
            'service_features_grid' => $request->service_features_grid,
            'process_steps' => $request->process_steps,
            'detailed_description' => $request->detailed_description,
            'price' => $request->price,
            'badge' => $request->badge,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'category' => Category::find($request->category_id)->name,
            'subcategory' => $request->subcategory,
            'image_url' => $request->image_url,
            'features' => $request->features,
            'service_id' => $request->service_id,
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $request->sort_order ?? 0,
            'tags' => $request->tags,
            'gallery' => $request->gallery,
            'product_type' => $request->product_type ?? 'simple',
            'product_data' => $request->product_data,
            'visibility' => $request->boolean('visibility', true),
        ]);

        $service->packages()->delete();

        if ($request->packages) {

            foreach ($request->packages as $package) {

                Package::create([
                    'digital_service_id' => $service->id,
                    'package_name' => $package['package_name'],
                    'price' => $package['price'] ?? null,
                    'description' => $package['description'] ?? null,
                ]);
            }
        }

        return redirect()->route('admin.services.index')
            ->with('success', 'Digital service updated successfully!');
    }

    /**
     * Remove the specified digital service from storage.
     */
    public function destroy(DigitalService $service)
    {
        if (!auth('admin')->user()->hasPermission('services', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Digital service deleted successfully!');
    }

    /**
     * Toggle the active status of a digital service.
     */
    public function toggleStatus(DigitalService $service)
    {
        if (!auth('admin')->user()->hasPermission('services', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $service->update([
            'is_active' => !$service->is_active
        ]);

        return back()->with('success', 'Service status updated successfully!');
    }
}
