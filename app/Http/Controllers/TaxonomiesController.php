<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    Taxonomies,
    Collections,
    Collection_taxonomy
};
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class TaxonomiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            ['name' => 'Title'],
            ['name' => 'Terms'],
        ];

        $taxonomiesInfo = Taxonomies::withCount('terms')->get();

        return view('taxonomies.index', compact('columns', 'taxonomiesInfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taxonomies.create');
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

        if ($validator->fails()) : return redirect()->back()->withErrors($validator)->withInput();
        endif;

        $taxonomy = new Taxonomies();
        $taxonomy = [
            'title' => $request->input('title'),
            'handle' => $request->input('handle'),
        ];
        Taxonomies::insert($taxonomy);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Collection created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $handle)
    {
        $taxonomy = Taxonomies::where(['handle' => $handle])->firstOrFail();
        $collections = Collections::all();

        return view('taxonomies.edit', compact('taxonomy', 'collections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $handle)
    {
        $selectedCollections[] = $request->input('collections');

        $rules = ['title' => 'required|string|max:255'];

        $validatedData = $request->validate($rules);
        $taxonomyData = ["collections" => $selectedCollections];
        // $newHandle = preg_replace('/[^a-zA-Z0-9]/', '-', $validatedData['title']);
        // Convert data to JSON format
        $jsonData = json_encode($taxonomyData);
        $mytime = Carbon::now();
        $taxonomy = [
            'settings' => $jsonData,
            'title' => $validatedData['title'],
            // 'handle' => $newHandle,
            'updated_at' => $mytime->toDateTimeString(),
        ];

        $collectionsArray = explode(',', $selectedCollections[0]);

        foreach ($collectionsArray as $collectionHandle) :
            // Retrieve the collection ID
            $collection = Collections::where('handle', $collectionHandle)->first();

            if ($collection && $taxonomy) :
                Collection_taxonomy::insert([
                    'collection_handle' => $collection->handle,
                    'taxonomy_handle' => $handle,
                ]);
            endif;
        endforeach;

        Taxonomies::where('handle', $handle)->update($taxonomy);
        // Redirect back with success message
        return redirect()->back()->with('success', 'taxonomy has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $handle)
    {
    }
}
