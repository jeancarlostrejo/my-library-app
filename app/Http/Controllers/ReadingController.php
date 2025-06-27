<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function current()
    {
        return view('current_reading');
    }
}
