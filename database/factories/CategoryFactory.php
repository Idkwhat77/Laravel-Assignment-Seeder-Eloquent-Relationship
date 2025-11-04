<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $categories = [
            'Web Development', 'Mobile Development', 'DevOps', 'Database', 
            'Frontend', 'Backend', 'Full Stack', 'UI/UX Design', 
            'Programming', 'Tutorial', 'News', 'Technology'
        ];
        
        $colors = ['#3b82f6', '#ef4444', '#10b981', '#f59e0b', '#8b5cf6', '#06b6d4', '#ec4899', '#84cc16'];
        
        $name = $this->faker->randomElement($categories);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . $this->faker->randomNumber(3),
            'description' => $this->faker->sentence(),
            'color' => $this->faker->randomElement($colors),
        ];
    }
}