<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        if (!auth('admin')->user()->hasPermission('settings')) {
            return abort(403, 'Unauthorized action.');
        }

        $settings = Setting::all()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        if (!auth('admin')->user()->hasPermission('settings', 'edit')) {
            return abort(403, 'Unauthorized action.');
        }

        foreach ($request->settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully!');
    }
}
