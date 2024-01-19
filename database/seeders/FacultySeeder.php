<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::create([
            'name' => 'Faculty',
            'email' => 'faculty@example.com',
            'password' => '123456789',
            'contact' => '9876543212',
            'gender' => 'male',
            'address' => 'Ranchi'
        ]);
    }
}
