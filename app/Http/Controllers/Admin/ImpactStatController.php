<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImpactStat;
use Illuminate\Http\Request;

class ImpactStatController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('impact-stats')) {
            return abort(403, 'Unauthorized action.');
        }

        $stats = ImpactStat::ordered()->paginate(10);
        return view('admin.impact-stats.index', compact('stats'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('impact-stats', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.impact-stats.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('impact-stats', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        ImpactStat::create($request->all());

        return redirect()->route('admin.impact-stats.index')
            ->with('success', 'Impact stat created successfully!');
    }

    public function edit(ImpactStat $impactStat)
    {
        if (!auth('admin')->user()->hasPermission('impact-stats', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.impact-stats.edit', compact('impactStat'));
    }

    public function update(Request $request, ImpactStat $impactStat)
    {
        if (!auth('admin')->user()->hasPermission('impact-stats', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $impactStat->update($request->all());

        return redirect()->route('admin.impact-stats.index')
            ->with('success', 'Impact stat updated successfully!');
    }

    public function destroy(ImpactStat $impactStat)
    {
        if (!auth('admin')->user()->hasPermission('impact-stats', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $impactStat->delete();

        return redirect()->route('admin.impact-stats.index')
            ->with('success', 'Impact stat deleted successfully!');
    }
}
