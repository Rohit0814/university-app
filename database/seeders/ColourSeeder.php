<?php

namespace Database\Seeders;

use App\Models\Colour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Colour::create([
            'Navbar_background' => '#11235A',
            'Heading_background' => '#a4aac1',
            'Navbar_text' => '#000000',
            'Heading_text' => '#ffffff',
        ]);
    }
}
