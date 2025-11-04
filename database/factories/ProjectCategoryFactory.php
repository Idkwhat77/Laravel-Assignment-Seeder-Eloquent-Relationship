<?php

namespace Database\Factories;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectCategoryFactory extends Factory
{
    protected $model = ProjectCategory::class;

    public function definition(): array
    {
        $categories = [
            'Web Application', 'Mobile App', 'E-commerce', 'API Development',
            'SaaS', 'Portfolio', 'Dashboard', 'CMS', 'Game', 'Tool'
        ];
        
        $colors = ['#dc2626', '#059669', '#7c3aed', '#db2777', '#ea580c', '#0891b2'];
        
        $name = $this->faker->randomElement($categories);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . $this->faker->randomNumber(3),
            'description' => $this->faker->sentence(),
            'color' => $this->faker->randomElement($colors),
        ];
    }
}