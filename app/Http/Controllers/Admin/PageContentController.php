<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('page-contents')) {
            return abort(403, 'Unauthorized action.');
        }

        $contents = PageContent::paginate(15);
        return view('admin.page-contents.index', compact('contents'));
    }

    public function create()
    {
        if (!auth('admin')->user()->hasPermission('page-contents', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.page-contents.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('page-contents', 'create')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'page_slug' => 'required|string',
            'section_slug' => 'required|string',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image_url' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        PageContent::create($request->all());

        return redirect()->route('admin.page-contents.index')
            ->with('success', 'Page content created successfully!');
    }

    public function edit(PageContent $pageContent)
    {
        if (!auth('admin')->user()->hasPermission('page-contents', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.page-contents.edit', compact('pageContent'));
    }

    public function update(Request $request, PageContent $pageContent)
    {
        if (!auth('admin')->user()->hasPermission('page-contents', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'page_slug' => 'required|string',
            'section_slug' => 'required|string',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image_url' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $pageContent->update($request->all());

        return redirect()->route('admin.page-contents.index')
            ->with('success', 'Page content updated successfully!');
    }

    public function destroy(PageContent $pageContent)
    {
        if (!auth('admin')->user()->hasPermission('page-contents', 'delete')) {
            return abort(403, 'Unauthorized action.');
        }

        $pageContent->delete();

        return redirect()->route('admin.page-contents.index')
            ->with('success', 'Page content deleted successfully!');
    }
}
