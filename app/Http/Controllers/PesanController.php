<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index($id)
    {
        $laundry = Laundry::where('id', $id)->first();
        return view('laundry.pesan', [
            'laundry' => $laundry
        ]);
    }

    public function store(Request $request)
    {
        Pesanan::create($request->all());

        return redirect()->back()->with('success', 'Transaksi Berhasil Tersimpan');
    }
}
