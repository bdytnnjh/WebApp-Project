<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Display feedback for admin
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNo' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Feedback submitted successfully.');
    }


}

