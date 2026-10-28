<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'termek_id',
    'felhasznalo_id',
    'ertekeles',
    'kep_url',
    'szoveg',
    'datum',
    'jovahagyva',
])]
class Ertekeles extends Model
{
    /** @use HasFactory<\Database\Factories\ErtekelesFactory> */
    use HasFactory;
}
