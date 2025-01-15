<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    public function store(Request $request)
{
    $request->validate([
        'landmark_name' => 'required|string|max:255',
        'short_term_name' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ]);

    Landmark::create($request->all());

    return redirect()->back()->with('success', 'Landmark added successfully!');
}

}
