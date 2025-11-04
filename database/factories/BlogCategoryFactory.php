<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogCategoryFactory extends Factory
{
    protected $model = BlogCategory::class;

    public function definition(): array
    {
        $categories = [
            'Web Development', 'Laravel', 'JavaScript', 'PHP', 'Tutorial',
            'Frontend', 'Backend', 'Vue.js', 'React', 'CSS'
        ];
        
        $colors = ['#3b82f6', '#ef4444', '#10b981', '#f59e0b', '#8b5cf6', '#06b6d4'];
        
        $name = $this->faker->randomElement($categories);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . $this->faker->randomNumber(3),
            'description' => $this->faker->sentence(),
            'color' => $this->faker->randomElement($colors),
        ];
    }
}