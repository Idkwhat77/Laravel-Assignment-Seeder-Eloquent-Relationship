<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Fu Xuan quest for Milkshake',
            'description' => 'rpg hsr .',
            'image' => 'fuxuan.png',
            'demo_url' => 'no.com',
            'github_url' => 'https://github.com/Idkwhat77/iforgottopush',
            'technologies' => ['Python'],
            'featured' => true,
            'status' => 'completed'
        ]);

        Project::create([
            'name' => 'Java Swing App',
            'description' => 'hsr character website using java swing',
            'image' => 'javaswing.PNG',
            'demo_url' => 'https://demo.aaaaaa.com',
            'github_url' => 'https://github.com/Idkwhat77/Swing-Layout-Test',
            'technologies' => ['Java'],
            'featured' => true,
            'status' => 'completed'
        ]);

        Project::create([
            'name' => 'HTML Quiz Website',
            'description' => 'Website made from figma',
            'image' => 'figmaweb.PNG',
            'demo_url' => 'https://demo.asdasdsadasdsa.com',
            'github_url' => 'https://github.com/Idkwhat77/Figma-Website',
            'technologies' => ['HTML', 'CSS', 'JS'],
            'featured' => true,
            'status' => 'completed'
        ]);

        Project::create([
            'name' => 'Tailwind Portofolio',
            'description' => 'Portfolio made using Tailwind CSS',
            'image' => 'tailwind.PNG',
            'demo_url' => 'https://demo.asdasdsadasdsa.com',
            'github_url' => 'https://github.com/Idkwhat77/Tailwind-Portfolio',
            'technologies' => ['HTML', 'CSS', 'JS'],
            'featured' => true,
            'status' => 'completed'
        ]);
    }
}