<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compressor extends Model
{
    use HasFactory;
    protected $fillable = [
        'LCDDisplay',
        'remarks1',
        'EmergencyButton',
        'remarks2',
        'LoadingPressure',
        'remarks3',
        'TemperatureMesin',
        'remarks4',
        'TemperatureOil',
        'remarks5',
        'PressureOil',
        'remarks6',
        'BodyCompressor',
        'remarks7',
        'TempLPElement',
        'remarks8',
        'TempHPElement',
        'remarks9',
    ];
}
