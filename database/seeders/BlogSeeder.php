<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => 'Building Modern Web Applications with Laravel 11',
            'content' => 'In this comprehensive guide, we explore the latest features in Laravel 11 and how to build scalable web applications. We cover everything from setup to deployment, including best practices for performance optimization.',
            'excerpt' => 'Learn how to leverage Laravel 11\'s new features to build better web applications.',
            'slug' => Str::slug('Building Modern Web Applications with Laravel 11'),
            'published_at' => now()->subDays(7),
            'is_published' => true
        ]);

        Blog::create([
            'title' => 'The Future of Frontend Development',
            'content' => 'Frontend development is rapidly evolving with new frameworks and tools. In this article, we discuss the latest trends in React, Vue.js, and the emerging technologies that will shape the future of web development.',
            'excerpt' => 'Exploring the latest trends and technologies in frontend development.',
            'slug' => Str::slug('The Future of Frontend Development'),
            'published_at' => now()->subDays(14),
            'is_published' => true
        ]);

        Blog::create([
            'title' => 'Mastering Database Design Patterns',
            'content' => 'Database design is crucial for application performance. This post covers essential design patterns, normalization techniques, and optimization strategies for both SQL and NoSQL databases.',
            'excerpt' => 'Essential database design patterns every developer should know.',
            'slug' => Str::slug('Mastering Database Design Patterns'),
            'published_at' => now()->subDays(21),
            'is_published' => true
        ]);
    }
}