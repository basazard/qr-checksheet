<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dryer extends Model
{
    use HasFactory;
    protected $fillable = [
        'Humidity',
        'remarks1',
        'BodyDryer',
        'remarks2',
        'IndikatorFilterIn',
        'remarks3',
        'IndikatorFilterOut',
        'remarks4',
        'checker',
    ];
}
