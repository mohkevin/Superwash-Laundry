<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $laundry = Laundry::get();
        return view('home.index', [
            'title' => 'Home',
            'laundry' => $laundry
        ]);
    }
}
