<?php

namespace App\Http\Controllers;

use App\Models\Globals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GlobalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            ['name' => 'Title'],
            ['name' => 'handle'],
        ];

        $globalsInfo = Globals::where(['status' => 1])->firstOrFail();
        return view('globals.index', compact('columns', 'globalsInfo'));
    }

    public function show(string $handle)
    {
        $global = Globals::where(['handle' => $handle])->firstOrFail();

        return view('globals.configure', compact('global'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('globals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'handle' => 'required|string|max:255',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) :
            return redirect()->back()->withErrors($validator)->withInput();
        endif;

        $entryData = ['tagline' => null];
        $jsonData = json_encode($entryData);
        $globals = new Globals();
        // Save data to the database
        $globals = [
            'settings' => $jsonData,
            'title' => $request->input('title'),
            'handle' => $request->input('handle'),
        ];
        Globals::insert($globals);

        return redirect()->route('globals.edit', ['global' => $request->input('handle')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $handle)
    {
        $globals = Globals::where(['handle' => $handle])->firstOrFail();

        return view('globals.edit', compact('globals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $handle)
    {
        $rules = ['title' => 'required|string|max:255'];

        $validatedData = $request->validate($rules);

        $global = ['title' => $validatedData['title']];

        Globals::where(['handle' => $handle])->update($global);

        return redirect()->back()->with('success', 'Global has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $handle)
    {
        try {
            Globals::where('handle', $handle)->first()->delete();
            return redirect()->back()->with('success', 'Globals deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
