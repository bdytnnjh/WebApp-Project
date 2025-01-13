<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;


class GuidesController extends Controller
{
    /**
     * Display a listing of the guides.
     */
    public function index()
    {
        $guides = Guide::all(); // Fetch all guides from the database
        return view('guides', compact('guides'));

        $feedbacks = Feedback::all();
        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function submitForm(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNo' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the contact message to the database
        Feedback::create($request->all());

        // Redirect with a success message
        return back()->with('success', 'Thank you for your feedback!');
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
        return view('guides.edit', compact('guide'));
    }

    /**
     * Update the specified guide in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
        ]);

        $guide = Guide::findOrFail($id);
        $guide->update($request->all());

        return redirect()->route('guides.index')->with('success', 'Guide updated successfully.');
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
