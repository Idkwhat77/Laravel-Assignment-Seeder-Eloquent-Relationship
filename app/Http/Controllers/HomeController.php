<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $projects = Project::where('featured', true)->get();
        
        return view('home', compact('experiences', 'projects'));
    }
}