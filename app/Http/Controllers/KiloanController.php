<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KiloanController extends Controller
{
    public function index()
    {
        return view('laundry.index', [
            'title' => 'Kiloan',
        ]);
    }
}
