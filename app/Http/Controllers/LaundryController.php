<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function index($id)
    {
        $laundry = Laundry::where('id', $id)->first();
        return view('laundry.index', [
            'title' => 'Kiloan',
            'laundry' => $laundry,
        ]);
    }
}
