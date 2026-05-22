<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('locations')) {
            return abort(403, 'Unauthorized action.');
        }

        $locations = Location::ordered()->paginate(10);
        return view('admin.locations.index', compact('locations'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('locations', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.locations.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('locations', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'icon' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        Location::create($request->all());

        return redirect()->route('admin.locations.index')
            ->with('success', 'Location created successfully!');
    }

    public function edit(Location $location)
    {
        if (!auth('admin')->user()->hasPermission('locations', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.locations.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        if (!auth('admin')->user()->hasPermission('locations', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'icon' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $location->update($request->all());

        return redirect()->route('admin.locations.index')
            ->with('success', 'Location updated successfully!');
    }

    public function destroy(Location $location)
    {
        if (!auth('admin')->user()->hasPermission('locations', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $location->delete();

        return redirect()->route('admin.locations.index')
            ->with('success', 'Location deleted successfully!');
    }
}
