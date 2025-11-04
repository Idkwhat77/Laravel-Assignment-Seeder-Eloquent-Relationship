<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    public function definition(): array
    {
        // Generate a completely random title to avoid duplicates
        $title = $this->faker->sentence($this->faker->numberBetween(4, 8));
        $title = rtrim($title, '.');
        
        // Add some tech-related words to make it more relevant
        $techWords = [
            'Laravel', 'React', 'Vue.js', 'JavaScript', 'PHP', 'Python', 
            'CSS', 'HTML', 'Database', 'API', 'Framework', 'Development',
            'Programming', 'Web', 'Mobile', 'Docker', 'Git', 'MySQL'
        ];
        
        // Randomly add a tech word to the title
        if ($this->faker->boolean(70)) {
            $techWord = $this->faker->randomElement($techWords);
            $title = $techWord . ': ' . $title;
        }
        
        $content = $this->faker->paragraphs($this->faker->numberBetween(5, 10), true);
        
        // Generate unique slug with timestamp to ensure uniqueness
        $baseSlug = Str::slug($title);
        $slug = $baseSlug . '-' . $this->faker->unique()->randomNumber(5);
        
        return [
            'title' => $title,
            'content' => $content,
            'excerpt' => $this->faker->sentence($this->faker->numberBetween(15, 25)),
            'image' => $this->faker->boolean(70) ? $this->faker->slug() . '.jpg' : null,
            'slug' => $slug,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_published' => $this->faker->boolean(85),
            'blog_category_id' => BlogCategory::factory(),
        ];
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
            'published_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
        ]);
    }

    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }
}