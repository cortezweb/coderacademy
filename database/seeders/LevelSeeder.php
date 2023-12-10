<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'name' => 'nivel Basico'
        ]);

        Level::create([
            'name' => 'nivel Intermedio'
        ]);

        Level::create([
            'name' => 'nivel avanzando'
        ]);
    }
}
