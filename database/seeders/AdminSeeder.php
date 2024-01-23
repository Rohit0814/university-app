<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => '9234223298',
            'Institution_Name' => 'University Auth',
            'Tag_line' => 'Everyone have right of education',
            'URL' => '127.0.0.1',
            'Time_Zone' => 'UTC-0',
            'Address' => 'Ranchi Jharkhand - 834010',
        ]);
    }
}
