<?php

namespace App\Http\Controllers;

use App\Models\TaxonomyTerms;
use App\Models\Collections;
use App\Models\Taxonomies;
use Carbon\Carbon;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function __invoke($handle)
    {
        $taxonomy = Taxonomies::with('terms')->where('handle', $handle)->firstOrFail();

        return view('terms.index', compact('taxonomy'));
    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create($handle)
    {
        $taxonomy = Taxonomies::where(['handle' => $handle])->firstOrFail();

        return view('terms.create', compact('taxonomy'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $handle)
    {
        $isEnabled = $request->input('enableState');

        $rules = [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'required|string|unique:entries,slug',
        ];

        $validatedData = $request->validate($rules);

        $entryData = [
            'content' => $validatedData['content'],
        ];

        if ($isEnabled) :
            $metadataRules = [];
            $tagTypes = $request->input('tagType');
            $nameValues = $request->input('nameValue');
            $contentAttributes = $request->input('contentAttribute');

            for ($i = 0; $i < count($tagTypes); $i++) :
                $metadataRules['tagType.' . $i] = 'required|string';
                $metadataRules['nameValue.' . $i] = 'required|string';
                $metadataRules['contentAttribute.' . $i] = 'required|string';
            endfor;

            $rules = array_merge($rules, $metadataRules);

            $validatedData = $request->validate($rules);

            $metadata = [];
            for ($i = 0; $i < count($tagTypes); $i++) :
                $entry = [
                    'tagType' => $tagTypes[$i],
                    'nameValue' => $nameValues[$i],
                    'contentAttribute' => $contentAttributes[$i]
                ];

                $metadata[$i] = $entry;
            endfor;

            $entryData['metaData'] = $metadata;
        endif;

        // Convert data to JSON format
        $jsonData = json_encode($entryData);

        // Save data to the database
        $entry = new TaxonomyTerms();
        $entry = [
            'data' => $jsonData,
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'site' => $validatedData['slug'],
            'uri' => null,
            'taxonomy' => $handle,
        ];
        TaxonomyTerms::insert($entry);
        // Redirect back with success message
        return redirect()->back()->with('success', 'Entry added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($handle, string $id)
    {
        $terms = TaxonomyTerms::where(['id' => $id])->firstOrFail();
        $collections = Collections::all();

        return view('terms.edit', compact('terms', 'collections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $handle, string $id)
    {
        $selectedCollections[] = $request->input('collections');

        $rules = ['title' => 'required|string|max:255'];

        $validatedData = $request->validate($rules);
        $taxonomyData = ["collections" => $selectedCollections];
        $newHandle = preg_replace('/[^a-zA-Z0-9]/', '-', $validatedData['title']);
        // Convert data to JSON format
        $jsonData = json_encode($taxonomyData);
        $mytime = Carbon::now();
        $taxonomy = [
            'settings' => $jsonData,
            'title' => $validatedData['title'],
            // 'handle' => $handle,
            'updated_at' => $mytime->toDateTimeString(),
        ];

        $collectionsArray = explode(',', $selectedCollections[0]);

        foreach ($collectionsArray as $collection) :
            $existingSettings = Collections::where('handle', $collection)->value('settings');

            $existingSettingsArray = json_decode($existingSettings, true);

            $mergedSettings = array_merge_recursive($existingSettingsArray ?? [], ["taxonomies" => $handle]);

            Collections::where('handle', $collection)->update(['settings' => json_encode($mergedSettings)]);
        endforeach;

        Taxonomies::where('id', $id)->update($taxonomy);
        // Redirect back with success message
        return redirect()->back()->with('success', 'taxonomy has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
