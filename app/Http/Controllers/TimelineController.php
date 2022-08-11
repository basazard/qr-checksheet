<?php

namespace App\Http\Controllers;

use App\Models\Compressor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index(){
        $theadsCompressor = [
            'No',
            'Update on',
            'LCD Display',
            'remarks1',
            'Emergency Button',
            'remarks2',
            'Loading Pressure',
            'remarks3',
            'Temperature Mesin',
            'remarks4',
            'Temperature Oil',
            'remarks5',
            'Pressure Oil',
            'remarks6',
            'Body Compressor',
            'remarks7',
            'Temp LP Element',
            'remarks8',
            'Temp HP Element',
            'remarks9',
            'checker',
        ];

        $compressor = Compressor::whereDate('created_at', '=', Carbon::today())->latest()->limit(1)->get();

        return view('timeline', compact('theadsCompressor','compressor'));
    }
}
