<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('blogs')) {
            return abort(403, 'Unauthorized action.');
        }

        $blogs = Blog::with(['category', 'author'])->latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('blogs', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $categories = Category::where('type', 'blog')->get();
        return view('admin.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('blogs', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'required|string',
            'cover_image' => 'nullable|string',
            'cover_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        $cover_image = $request->cover_image;

        if ($request->hasFile('cover_image_file')) {
            $file = $request->file('cover_image_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs/covers'), $fileName);
            $cover_image = asset('uploads/blogs/covers/' . $fileName);
        }

        Blog::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title) . '-' . uniqid(),
            'content' => $request->content,
            'cover_image' => $cover_image,
            'category_id' => $request->category_id,
            'tags' => $request->tags,
            'is_published' => $request->boolean('is_published', true),
            'author_id' => auth('admin')->id(),
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post created successfully!');
    }

    public function edit(Blog $blog)
    {
        if (!auth('admin')->user()->hasPermission('blogs', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $categories = Category::where('type', 'blog')->get();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        if (!auth('admin')->user()->hasPermission('blogs', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'required|string',
            'cover_image' => 'nullable|string',
            'cover_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        $cover_image = $request->cover_image;

        if ($request->hasFile('cover_image_file')) {
            $file = $request->file('cover_image_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs/covers'), $fileName);
            $cover_image = asset('uploads/blogs/covers/' . $fileName);
        }

        $blog->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => $request->title !== $blog->title ? Str::slug($request->title) . '-' . uniqid() : $blog->slug,
            'content' => $request->content,
            'cover_image' => $cover_image,
            'category_id' => $request->category_id,
            'tags' => $request->tags,
            'is_published' => $request->boolean('is_published'),
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if (!auth('admin')->user()->hasPermission('blogs', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post deleted successfully!');
    }
}
