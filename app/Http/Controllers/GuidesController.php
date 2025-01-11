<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guides;


class GuidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guides = Guide::all(); // Fetch all guides from the database
        return view('guides', compact('guides'));
    }

    public function submitFeedback(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'feedback' => 'required|string|max:1000',
        ]);

        Guest::create([
            'name' => $request->name,
            'email' => $request->email,
            'feedback' => $request->feedback
        ]);

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
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
