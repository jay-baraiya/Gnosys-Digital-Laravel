<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('features')) {
            return abort(403, 'Unauthorized action.');
        }

        $features = Feature::ordered()->paginate(10);
        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('features', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.features.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('features', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'page' => 'required|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        Feature::create($request->all());

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature created successfully!');
    }

    public function edit(Feature $feature)
    {
        if (!auth('admin')->user()->hasPermission('features', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        if (!auth('admin')->user()->hasPermission('features', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'page' => 'required|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $feature->update($request->all());

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature updated successfully!');
    }

    public function destroy(Feature $feature)
    {
        if (!auth('admin')->user()->hasPermission('features', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $feature->delete();

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature deleted successfully!');
    }
}
