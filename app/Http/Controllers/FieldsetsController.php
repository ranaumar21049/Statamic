<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fieldsets;

class FieldsetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            ['name' => 'Title'],
            ['name' => 'Handle'],
            ['name' => 'Fields'],
        ];
        $fieldsetsInfo = Fieldsets::all();

        return view('fieldsets.index', compact('columns', 'fieldsetsInfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fieldsets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'handle' => 'required|string|max:255',
        ]);

        $data = ['fields' => []];

        $jsonData =  json_encode($data);

        // Create a new Fieldset instance
        $fieldset = new Fieldsets();
        $fieldset = [
            'data' => $jsonData,
            'title' => $request->title,
            'handle' => $request->handle,
        ];

        Fieldsets::insert($fieldset);

        // Redirect back or to any other route after successful insertion
        return redirect()->route('fieldsets.edit', ['fieldset' => $request->handle]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $handle)
    {
        $fieldset = Fieldsets::where(['handle' => $handle])->firstOrFail();

        return view('fieldsets.edit', compact('fieldset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $handle)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $fieldset = ['title' => $request->title];
        Fieldsets::where(['handle' => $handle])->update($fieldset);

        return redirect()->back()->with('success', 'Fieldset updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $handle)
    {
        try {
            Fieldsets::where('handle', $handle)->first()->delete();
            return redirect()->back()->with('success', 'Fieldsets deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
