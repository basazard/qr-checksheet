<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nitrogen extends Model
{
    use HasFactory;
    protected $fillable = [
        'LCDDisplay',
        'remarks1',
        'Purity',
        'remarks2',
        'checker',
    ];
}
