<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Guide; // Ensure the correct model is imported

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
     * Store a newly created guide in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guides,email',
            'phone_number' => 'required|string|max:15', // Ensure this matches the input name
            'description' => 'required|string',
        ]);

        // Create a new guide using the validated data
        Guide::create($request->only('name', 'email', 'phone_number', 'description'));

        // Redirect to the index page with a success message
        return redirect()->route('guides.index')->with('success', 'Guide added successfully!');

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
}

