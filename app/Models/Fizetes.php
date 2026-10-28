<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'rendeles_id',
    'osszeg',
    'fizetesi_mod',
    'tranzakcio_id',
    'statusz',
    'fizetes_datuma',
])]
class Fizetes extends Model
{
    /** @use HasFactory<\Database\Factories\FizetesFactory> */
    use HasFactory;
}
