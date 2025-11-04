<?php

// database/seeders/CakeSeeder.php

namespace Database\Seeders;

use App\Models\Cake; // <-- Add this
use Illuminate\Database\Seeder;

class CakeSeeder extends Seeder
{
    public function run(): void
    {
        // Your original array
        $cakes = [
            ['name' => 'Blade Cake', 'image' => 'blade.png', 'price' => 100000],
            ['name' => 'Clara Cake', 'image' => 'clara.png', 'price' => 120000],
            ['name' => 'Danheng Cake', 'image' => 'danheng.png', 'price' => 90000],
            ['name' => 'Guinaifen Cake', 'image' => 'guinaifen.png', 'price' => 95000],
            ['name' => 'Herta Cake', 'image' => 'herta.png', 'price' => 110000],
            ['name' => 'Kafka Cake', 'image' => 'kafka.png', 'price' => 130000],
            ['name' => 'March Cake', 'image' => 'march.png', 'price' => 85000],
            ['name' => 'Qingque Cake', 'image' => 'qingque.png', 'price' => 105000],
            ['name' => 'Ruanmei Cake', 'image' => 'ruanmei.png', 'price' => 125000],
            ['name' => 'Trash Cake', 'image' => 'trash.png', 'price' => 50000],
        ];

        // Loop through the array and create records
        foreach ($cakes as $cake) {
            Cake::create($cake);
        }
    }
}
