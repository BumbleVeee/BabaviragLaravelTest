<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'rendeles_id',
    'termek_id',
    'mennyiseg',
    'egysegar',
    'osszesen',
])]
class RendelesTetel extends Model
{
    /** @use HasFactory<\Database\Factories\RendelesTetelFactory> */
    use HasFactory;
}
