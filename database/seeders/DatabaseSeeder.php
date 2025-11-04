<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\ProjectCategory;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Experience;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create categories first
        BlogCategory::factory(5)->create();
        ProjectCategory::factory(4)->create();
        
        // Create blogs and projects with categories
        Blog::factory(10)->create();
        Project::factory(8)->create();
        
        // Create experiences
        Experience::factory(5)->create();
    }
}