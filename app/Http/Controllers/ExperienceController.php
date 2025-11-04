<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        
        return view('experience', compact('experiences'));
    }
}