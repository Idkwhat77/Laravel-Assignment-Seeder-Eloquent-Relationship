<?php

namespace Database\Factories;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        $projectTypes = [
            'E-commerce Platform', 'Portfolio Website', 'Task Management App', 
            'Blog CMS', 'API Service', 'Dashboard', 'Mobile App', 'SaaS Platform'
        ];

        $technologies = [
            ['Laravel', 'Vue.js', 'MySQL'],
            ['React', 'Node.js', 'MongoDB'],
            ['PHP', 'JavaScript', 'PostgreSQL'],
            ['Python', 'Django', 'SQLite'],
            ['Next.js', 'Tailwind CSS', 'Supabase']
        ];

        return [
            'name' => $this->faker->randomElement($projectTypes),
            'description' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->boolean(80) ? $this->faker->slug() . '.jpg' : null,
            'demo_url' => $this->faker->boolean(70) ? $this->faker->url() : null,
            'github_url' => $this->faker->boolean(90) ? 'https://github.com/user/' . $this->faker->slug() : null,
            'technologies' => $this->faker->randomElement($technologies),
            'featured' => $this->faker->boolean(true),
            'status' => $this->faker->randomElement(['completed', 'in_progress', 'planned']),
            'project_category_id' => ProjectCategory::factory(),
        ];
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }

    public function completed(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'completed',
        ]);
    }
}