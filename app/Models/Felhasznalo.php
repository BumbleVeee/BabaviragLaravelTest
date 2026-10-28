<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'email',
    'jelszo_hash',
    'keresztnev',
    'vezeteknev',
    'telefon',
    'regisztracio_datuma',
    'utolso_belepes',
    'szerepkor'
])]
class Felhasznalo extends Model
{
    /** @use HasFactory<\Database\Factories\FelhasznaloFactory> */
    use HasFactory;
    protected $table = 'felhasznalok';
    public $timestamps = false;
}
