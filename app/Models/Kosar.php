<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'felhasznalo_id',
    'termek_id',
    'mennyiseg',
    'hozzaadva_datum',
])]
class Kosar extends Model
{
    /** @use HasFactory<\Database\Factories\KosarFactory> */
    use HasFactory;
}
