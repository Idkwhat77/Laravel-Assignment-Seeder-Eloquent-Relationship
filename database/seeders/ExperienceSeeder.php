<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        Experience::create([
            'company' => 'Tech Solutions Inc.',
            'position' => 'Senior Full Stack Developer',
            'description' => 'Led development of web applications using Laravel, React, and Vue.js. Managed a team of 3 developers and implemented CI/CD pipelines.',
            'start_date' => '2022-01-01',
            'end_date' => null,
            'is_current' => true,
            'technologies' => ['Laravel', 'React', 'Vue.js', 'MySQL', 'Docker'],
            'location' => 'Remote'
        ]);

        Experience::create([
            'company' => 'StartupXYZ',
            'position' => 'Frontend Developer',
            'description' => 'Developed responsive web applications and mobile-first designs. Collaborated with UX/UI designers to implement pixel-perfect interfaces.',
            'start_date' => '2020-06-01',
            'end_date' => '2021-12-31',
            'is_current' => false,
            'technologies' => ['JavaScript', 'React', 'Tailwind CSS', 'Node.js'],
            'location' => 'New York, NY'
        ]);
    }
}