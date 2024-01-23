<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    use HasFactory;

    protected $fillable = [
        'Navbar_background',
        'Heading_background',
        'Navbar_text',
        'Heading_text',
    ];
}
