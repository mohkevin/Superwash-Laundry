<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DryController extends Controller
{
    public function index()
    {
        return view('laundry.dry', [
            'title' => 'Dry Cleaning'
        ]);
    }
}
