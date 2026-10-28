<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'kategoria_id',
    'nev',
    'leiras',
    'ar',
    'akcios_ar',
    'cikkszam',
    'suly',
    'meret',
    'szin',
    'anyag',
    'kep_url',
    'lathato',
    'keszlet_mennyiseg',
    'letrehozva',
    'frissitve',
])]
class Termek extends Model
{
    /** @use HasFactory<\Database\Factories\TermekFactory> */
    use HasFactory;
}
