<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProcessStep;
use Illuminate\Http\Request;

class ProcessStepController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('process-steps')) {
            return abort(403, 'Unauthorized action.');
        }

        $steps = ProcessStep::ordered()->paginate(10);
        return view('admin.process-steps.index', compact('steps'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('process-steps', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.process-steps.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('process-steps', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'order' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        ProcessStep::create($request->all());

        return redirect()->route('admin.process-steps.index')
            ->with('success', 'Process step created successfully!');
    }

    public function edit(ProcessStep $processStep)
    {
        if (!auth('admin')->user()->hasPermission('process-steps', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.process-steps.edit', compact('processStep'));
    }

    public function update(Request $request, ProcessStep $processStep)
    {
        if (!auth('admin')->user()->hasPermission('process-steps', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'order' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $processStep->update($request->all());

        return redirect()->route('admin.process-steps.index')
            ->with('success', 'Process step updated successfully!');
    }

    public function destroy(ProcessStep $processStep)
    {
        if (!auth('admin')->user()->hasPermission('process-steps', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $processStep->delete();

        return redirect()->route('admin.process-steps.index')
            ->with('success', 'Process step deleted successfully!');
    }
}
