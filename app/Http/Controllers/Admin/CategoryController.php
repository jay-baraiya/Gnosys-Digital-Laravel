<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('categories')) {
            return abort(403, 'Unauthorized action.');
        }

        $categories = Category::withCount(['products', 'services'])->latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('categories', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('categories', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:product,service,blog',
            'description' => 'nullable|string',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => $request->type,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully!');
    }

    public function edit(Category $category)
    {
        if (!auth('admin')->user()->hasPermission('categories', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        if (!auth('admin')->user()->hasPermission('categories', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:product,service,blog',
            'description' => 'nullable|string',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => $request->type,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        if (!auth('admin')->user()->hasPermission('categories', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $category->delete();
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category deleted successfully!');
    }
}
