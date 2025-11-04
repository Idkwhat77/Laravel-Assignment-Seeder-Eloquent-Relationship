<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('blogCategory')
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->get();
            
        return view('blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $blog->load('blogCategory');
        
        return view('blog-detail', compact('blog'));
    }
}