<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tangki extends Model
{
    use HasFactory;
    protected $fillable = [
        'KranPembuanganAirTangki1',
        'remarks1',
        'TekananAnginTangki1',
        'remarks2',
        'TekananAnginTangki2',
        'remarks3',
        'TekananAnginTangki3',
        'remarks4',
        'checker',
    ];
}
