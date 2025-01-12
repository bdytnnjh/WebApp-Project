<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;

=======
use App\Models\Guide; // Ensure the correct model is imported
use App\Models\Guest; // Assuming Guest is the model for feedback
>>>>>>> 626012bfb0be9684b283fc264689dd9050f62eb5

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

<<<<<<< HEAD
    public function submitForm(Request $request)
=======
    /**
     * Show the form for creating a new guide.
     */
    public function create()
    {
        return view('guides.create'); // Show form to create a new guide
    }

    /**
     * Store a newly created guide in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
        ]);

        Guide::create($request->all()); // Create a new guide
        return redirect()->route('guides.index')->with('success', 'Guide created successfully.');
    }

    /**
     * Submit feedback from a guest.
     */
    public function submitFeedback(Request $request)
>>>>>>> 626012bfb0be9684b283fc264689dd9050f62eb5
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the contact message to the database
        Contact::create($validatedData);

<<<<<<< HEAD
        // Redirect with a success message
        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
=======
        return redirect()->route('feedback.form')->with('success', 'Thank you for your feedback!');
    }

    /**
     * Display the list of submitted feedback (optional).
     *
     * @return \Illuminate\View\View
     */
    public function listFeedback()
    {
        $feedbacks = Guest::latest()->get();
        return view('feedback_list', ['feedbacks' => $feedbacks]);
>>>>>>> 626012bfb0be9684b283fc264689dd9050f62eb5
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
}
