<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    public function definition(): array
    {
        $positions = [
            'Frontend Developer',
            'Backend Developer', 
            'Full Stack Developer',
            'Software Engineer',
            'Web Developer',
            'Mobile Developer',
            'DevOps Engineer',
            'UI/UX Designer'
        ];

        $startDate = $this->faker->dateTimeBetween('-4 years', '-6 months');
        $isCurrentJob = $this->faker->boolean(25);
        
        return [
            'company' => $this->faker->company(),
            'position' => $this->faker->randomElement($positions),
            'description' => $this->faker->paragraph(3),
            'start_date' => $startDate,
            'end_date' => $isCurrentJob ? null : $this->faker->dateTimeBetween($startDate, 'now'),
            'is_current' => $isCurrentJob,
            'technologies' => $this->faker->randomElements([
                'Laravel', 'React', 'Vue.js', 'JavaScript', 'PHP', 'Python',
                'Java', 'Node.js', 'MySQL', 'PostgreSQL', 'MongoDB',
                'Docker', 'AWS', 'Git', 'Figma', 'Adobe XD'
            ], $this->faker->numberBetween(3, 7)),
            'location' => $this->faker->randomElement([
                'Remote',
                $this->faker->city() . ', ' . $this->faker->country(),
                'Jakarta, Indonesia',
                'Singapore',
                'Kuala Lumpur, Malaysia'
            ])
        ];
    }

    public function current(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_current' => true,
            'end_date' => null,
        ]);
    }
}