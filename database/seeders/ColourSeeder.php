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
            'Navbar_background' => '#5F0F40',
            'Heading_background' => '#FB8B24',
            'Navbar_text' => '#E36414',
            'Heading_text' => '#9A031E',
            'status' => NULL,
            'palette' => 'dark',
        ]);

        Colour::create([
            'Navbar_background' => '#92C7CF',
            'Heading_background' => '#AAD7D9',
            'Navbar_text' => '#FBF9F1',
            'Heading_text' => '#E5E1DA',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#6B240C',
            'Heading_background' => '#994D1C',
            'Navbar_text' => '#E48F45',
            'Heading_text' => '#F5CCA0',
            'status' => NULL,
            'palette' => 'dark',
        ]);

        Colour::create([
            'Navbar_background' => '#FFE194',
            'Heading_background' => '#E8F6EF',
            'Navbar_text' => '#B8DFD8',
            'Heading_text' => '#4C4C6D',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#451952',
            'Heading_background' => '#662549',
            'Navbar_text' => '#AE445A',
            'Heading_text' => '#F39F5A',
            'status' => NULL,
            'palette' => 'dark',
        ]);


        Colour::create([
            'Navbar_background' => '#00A9FF',
            'Heading_background' => '#B2C8BA',
            'Navbar_text' => '#D2E3C8',
            'Heading_text' => '#EBF3E8',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#900C3F',
            'Heading_background' => '#C70039',
            'Navbar_text' => '#F94C10',
            'Heading_text' => '#F8DE22',
            'status' => NULL,
            'palette' => 'dark',
        ]);

        Colour::create([
            'Navbar_background' => '#00A9FF',
            'Heading_background' => '#89CFF3',
            'Navbar_text' => '#A0E9FF',
            'Heading_text' => '#CDF5FD',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#79155B',
            'Heading_background' => '#C23373',
            'Navbar_text' => '#F6635C',
            'Heading_text' => '#FFBA86',
            'status' => NULL,
            'palette' => 'dark',
        ]);

        Colour::create([
            'Navbar_background' => '#96B6C5',
            'Heading_background' => '#ADC4CE',
            'Navbar_text' => '#EEE0C9',
            'Heading_text' => '#F1F0E8',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#A75D5D',
            'Heading_background' => '#D3756B',
            'Navbar_text' => '#F0997D',
            'Heading_text' => '#FFC3A1',
            'status' => NULL,
            'palette' => 'dark',
        ]);

        Colour::create([
            'Navbar_background' => '#9AC5F4',
            'Heading_background' => '#99DBF5',
            'Navbar_text' => '#A7ECEE',
            'Heading_text' => '#FFEEBB',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#42032C',
            'Heading_background' => '#D36B00',
            'Navbar_text' => '#E6D2AA',
            'Heading_text' => '#F1EFDC',
            'status' => NULL,
            'palette' => 'dark',
        ]);

        Colour::create([
            'Navbar_background' => '#DEF5E5',
            'Heading_background' => '#BCEAD5',
            'Navbar_text' => '#9ED5C5',
            'Heading_text' => '#8EC3B0',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#FF5F00',
            'Heading_background' => '#B20600',
            'Navbar_text' => '#00092C',
            'Heading_text' => '#EEEEEE',
            'status' => NULL,
            'palette' => 'dark',
        ]);


        Colour::create([
            'Navbar_background' => '#FAF7F0',
            'Heading_background' => '#CDFCF6',
            'Navbar_text' => '#BCCEF8',
            'Heading_text' => '#98A8F8',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#8E3200',
            'Heading_background' => '#A64B2A',
            'Navbar_text' => '#D7A86E',
            'Heading_text' => '#FFEBC1',
            'status' => NULL,
            'palette' => 'dark',
        ]);


        Colour::create([
            'Navbar_background' => '#FEE3EC',
            'Heading_background' => '#F9C5D5',
            'Navbar_text' => '#F999B7',
            'Heading_text' => '#F2789F',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#781D42',
            'Heading_background' => '#A3423C',
            'Navbar_text' => '#DE834D',
            'Heading_text' => '#F0D290',
            'status' => NULL,
            'palette' => 'dark',
        ]);


        Colour::create([
            'Navbar_background' => '#DBD0C0',
            'Heading_background' => '#FAEEE0',
            'Navbar_text' => '#F9E4C8',
            'Heading_text' => '#F9CF93',
            'status' => NULL,
            'palette' => 'light',
        ]);

        Colour::create([
            'Navbar_background' => '#F88F01',
            'Heading_background' => '#E27802',
            'Navbar_text' => '#6A492B',
            'Heading_text' => '#58391C',
            'status' => NULL,
            'palette' => 'dark',
        ]);


        Colour::create([
            'Navbar_background' => '#FDEFEF',
            'Heading_background' => '#F4DFD0',
            'Navbar_text' => '#DAD0C2',
            'Heading_text' => '#CDBBA7',
            'status' => NULL,
            'palette' => 'light',
        ]);


    }
}
