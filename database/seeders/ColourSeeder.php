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
            'Navbar_text' => '#ffffff',
            'Heading_text' => '#000000',
            'Default' => 'true',
            'status' => 'true',
        ]);

        Colour::create([
            'Navbar_background' => '#6C22A6',
            'Heading_background' => '#6962AD',
            'Navbar_text' => '#83C0C1',
            'Heading_text' => '#96E9C6',
            'status' => NULL,

        ]);

        Colour::create([
            'Navbar_background' => '#561C24',
            'Heading_background' => '#6D2932',
            'Navbar_text' => '#C7B7A3',
            'Heading_text' => '#E8D8C4',
        ]);

        Colour::create([
            'Navbar_background' => '#D04848',
            'Heading_background' => '#F3B95F',
            'Navbar_text' => '#FDE767',
            'Heading_text' => '#6895D2',
        ]);

        Colour::create([
            'Navbar_background' => '#0A1D56',
            'Heading_background' => '#492E87',
            'Navbar_text' => '#37B5B6',
            'Heading_text' => '#F2F597',
        ]);

        Colour::create([
            'Navbar_background' => '#294B29',
            'Heading_background' => '#50623A',
            'Navbar_text' => '#789461',
            'Heading_text' => '#DBE7C9',
        ]);




        Colour::create([
            'Navbar_background' => '#43766C',
            'Heading_background' => '#F8FAE5',
            'Navbar_text' => '#B19470',
            'Heading_text' => '#76453B',
        ]);


        Colour::create([
            'Navbar_background' => '#DCF2F1',
            'Heading_background' => '#7FC7D9',
            'Navbar_text' => '#365486',
            'Heading_text' => '#0F1035',
        ]);



        Colour::create([
            'Navbar_background' => '#92C7CF',
            'Heading_background' => '#AAD7D9',
            'Navbar_text' => '#FBF9F1',
            'Heading_text' => '#E5E1DA',
        ]);



        Colour::create([
            'Navbar_background' => '#EEF5FF',
            'Heading_background' => '#B4D4FF',
            'Navbar_text' => '#86B6F6',
            'Heading_text' => '#176B87',
        ]);



        Colour::create([
            'Navbar_background' => '#2D3250',
            'Heading_background' => '#424769',
            'Navbar_text' => '#7077A1',
            'Heading_text' => '#F6B17A',
        ]);


        Colour::create([
            'Navbar_background' => '#030637',
            'Heading_background' => '#3C0753',
            'Navbar_text' => '#720455',
            'Heading_text' => '#910A67',
        ]);


        Colour::create([
            'Navbar_background' => '#164863',
            'Heading_background' => '#427D9D',
            'Navbar_text' => '#9BBEC8',
            'Heading_text' => '#DDF2FD',
        ]);


        Colour::create([
            'Navbar_background' => '#3E3232',
            'Heading_background' => '#503C3C',
            'Navbar_text' => '#7E6363',
            'Heading_text' => '#A87C7C',
        ]);


        Colour::create([
            'Navbar_background' => '#635985',
            'Heading_background' => '#443C68',
            'Navbar_text' => '#393053',
            'Heading_text' => '#18122B',
        ]);


        Colour::create([
            'Navbar_background' => '#0A2647',
            'Heading_background' => '#144272',
            'Navbar_text' => '#205295',
            'Heading_text' => '#2C74B3',
        ]);


        Colour::create([
            'Navbar_background' => '#3F3B6C',
            'Heading_background' => '#624F82',
            'Navbar_text' => '#9F73AB',
            'Heading_text' => '#A3C7D6',
        ]);


        Colour::create([
            'Navbar_background' => '#4C0033',
            'Heading_background' => '#790252',
            'Navbar_text' => '#AF0171',
            'Heading_text' => '#E80F88',
        ]);


        Colour::create([
            'Navbar_background' => '#BEADFA',
            'Heading_background' => '#D0BFFF',
            'Navbar_text' => '#DFCCFB',
            'Heading_text' => '#FFF8C9',
        ]);


        Colour::create([
            'Navbar_background' => '#80BCBD',
            'Heading_background' => '#AAD9BB',
            'Navbar_text' => '#D5F0C1',
            'Heading_text' => '#F9F7C9',
        ]);


    }
}
