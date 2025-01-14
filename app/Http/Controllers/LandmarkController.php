<?php

namespace App\Http\Controllers;

use App\Models\Landmark;

class LandmarkController extends Controller
{
    public function index()
    {
        $landmarks = Landmark::all();
        return view('landmarks.index', compact('landmarks'));
    }
}
