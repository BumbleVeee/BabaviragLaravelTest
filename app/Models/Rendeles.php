<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'felhasznalo_id',
    'szallitasi_cim_id',
    'szamlazasi_cim_id',
    'rendeles_datuma',
    'statusz',
    'osszeg',
    'szallitasi_koltseg',
    'fizetesi_mod',
    'szallitasi_mod',
    'megjegyzes',
    'fizetve',
])]
class Rendeles extends Model
{
    /** @use HasFactory<\Database\Factories\RendelesFactory> */
    use HasFactory;
}
