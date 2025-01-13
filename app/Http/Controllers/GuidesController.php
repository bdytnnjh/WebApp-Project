<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Guide;

class GuidesController extends Controller
{
    /**
     * Display a listing of the guides.
     */
    public function index()
    {
        $guides = Guide::all(); // Fetch all guides from the database
        return view('guides', compact('guides'));
    }
    /**
     * * Show the form for creating a new guide.
     */
    public function create()
    {
        return view('add-guides'); // Show form to create a new guide
    }

    /**
     * Display the specified guide.
     */
    public function show(string $id)
    {
        $guide = Guide::findOrFail($id);
        return view('guides.show', compact('guide'));
    }

    /**
     * Show the form for editing the specified guide.
     */
    public function edit(string $id)
    {
        $guide = Guide::findOrFail($id);
        return view('add-guides', compact('guide'));
    }

    /**
     * Update the specified guide in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified guide from storage.
     */
    public function destroy(string $id)
    {
        $guide = Guide::findOrFail($id);
        $guide->delete();

        return redirect()->route('guides.index')->with('success', 'Guide deleted successfully.');
    }

    public function store(Request $request)
    {
        // Handle the logic to store data here
        // Example: Validate and save the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        // Save the data to the database
        $guide = new Guide(); // Assuming you have a Guide model
        $guide->title = $validatedData['title'];
        $guide->content = $validatedData['content'];
        $guide->save();

        return redirect()->route('guides.index')->with('success', 'Guide created successfully.');
    }
}

