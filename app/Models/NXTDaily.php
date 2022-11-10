<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NXTDaily extends Model
{
    use HasFactory;

    protected $fillable = [
        'tekanan_angin',
        'kualitas_angin',
        'fungsi_pokayoke',
        'fungsi_tombol_emergensi',
        'lampu_tanda',
        'fan_bagian_belakang_mesin',
        'dust_box_belakang',
        'dust_box_dalam',
        'feeder_stand',
        'fungsi_buzzer',
        'remarks',
        'image',
    ];
}
