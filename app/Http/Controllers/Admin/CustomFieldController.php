<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomField;
use App\Models\CustomFieldType;
use Illuminate\Http\Request;

class CustomFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.custom-fields.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customfieldtypes = CustomFieldType::query()->select(['id','name'])->where('status', 1)->pluck('name', 'id');

        return view('admin.custom-fields.create', compact('customfieldtypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomField $customField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomField $customField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomField $customField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomField $customField)
    {
        //
    }

    public function getFieldTypeData(Request $request) {
        $request->validate([
            'type_id' => 'required|exists:custom_field_types,id'
        ]);

        // Fetch the field type data
        $fieldType = CustomFieldType::findOrFail($request->type_id);

        // Decode the JSON params (fallback to empty array if null)
        $params = json_decode($fieldType->params, true) ?? [];

        // Render a separate blade view file to string
        $html = view('admin.custom-fields.type_settings', [
            'fieldType' => $fieldType,
            'params' => $params
        ])->render();

        // Return as a JSON response
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }
}
