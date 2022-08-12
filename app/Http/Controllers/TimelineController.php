<?php

namespace App\Http\Controllers;

use App\Models\Compressor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index(){
        return view('timeline');
    }
}
