<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->canManageAdmins()) {
            return abort(403, 'Unauthorized action.');
        }

        $admins = Admin::latest()->get();
        return view('admin.users.index', compact('admins'));
    }

    public function create()
    {
        if (!auth('admin')->user()->canManageAdmins()) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->canManageAdmins()) {
            return abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
            'access_level' => 'required|in:full,limited,viewer',
            'permissions' => 'nullable|array',
            'permissions.*' => 'string',
        ]);

        $permissions = $request->access_level === 'limited' ? ($request->permissions ?? []) : null;

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'access_level' => $request->access_level,
            'permissions' => $permissions,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.admins.index')
            ->with('success', 'Admin user created successfully.');
    }

    public function edit(Admin $admin)
    {
        if (!auth('admin')->user()->canManageAdmins()) {
            return abort(403, 'Unauthorized action.');
        }

        return view('admin.admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        if (!auth('admin')->user()->canManageAdmins()) {
            return abort(403, 'Unauthorized action.');
        }

        if ($admin->id === 1 && auth('admin')->id() !== 1) {
            return redirect()->back()->with('error', 'You cannot modify the super admin.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('admins')->ignore($admin->id)],
            'password' => 'nullable|string|min:8|confirmed',
            'access_level' => 'required|in:full,limited,viewer',
            'permissions' => 'nullable|array',
            'permissions.*' => 'string',
        ]);

        $permissions = $request->access_level === 'limited' ? ($request->permissions ?? []) : null;

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->access_level = $admin->id === 1 ? 'full' : $request->access_level; // Super admin is always full
        $admin->permissions = $permissions;
        $admin->is_active = $request->has('is_active');

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->route('admin.admins.index')
            ->with('success', 'Admin user updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        if (!auth('admin')->user()->canManageAdmins()) {
            return abort(403, 'Unauthorized action.');
        }

        if ($admin->id === 1) {
            return back()->with('error', 'Cannot delete super admin.');
        }

        if ($admin->id === auth('admin')->id()) {
             return back()->with('error', 'Cannot delete yourself.');
        }

        $admin->delete();

        return redirect()->route('admin.admins.index')
            ->with('success', 'Admin user deleted successfully.');
    }
}
