<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('testimonials')) {
            return abort(403, 'Unauthorized action.');
        }

        $testimonials = Testimonial::ordered()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('testimonials', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('testimonials', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_designation' => 'nullable|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'client_image' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        Testimonial::create($request->all());

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully!');
    }

    public function edit(Testimonial $testimonial)
    {
        if (!auth('admin')->user()->hasPermission('testimonials', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        if (!auth('admin')->user()->hasPermission('testimonials', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_designation' => 'nullable|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'client_image' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $testimonial->update($request->all());

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if (!auth('admin')->user()->hasPermission('testimonials', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully!');
    }
}
