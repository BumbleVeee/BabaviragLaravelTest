<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'felhasznalo_id',
    'termek_id',
    'hozzaadva_datum',
])]
class Kedvenc extends Model
{
    /** @use HasFactory<\Database\Factories\KedvencFactory> */
    use HasFactory;
}
