<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'felhasznalo_id',
    'iranyitoszam',
    'varos',
    'utca',
    'hazszam',
    'emelet',
    'ajto',
    'alapertelmezett',
    'cim_neve',
])]
class Cim extends Model
{
    /** @use HasFactory<\Database\Factories\CimFactory> */
    use HasFactory;
}
