<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function perfume(){
        return view('pageperfume.perfume');
    }
}
