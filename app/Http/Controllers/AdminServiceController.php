<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function create()
    {
        $laundry = Laundry::get();
        return view('admin.tambahService', [
            'title' => 'Edit Service',
            'active' => 'admin',
            'laundry' => $laundry
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service' => 'required',
            'price' => 'required',
            'laundry_id' => 'required',
        ]);

        Service::create($validated);

        return redirect()->back();
    }

    public function edit($id)
    {
        $laundry = Laundry::get();
        $service = Service::where('id', $id)->first();
        return view('admin.editService', [
            'title' => 'Edit Service',
            'active' => 'admin',
            'service' => $service,
            'laundry' => $laundry
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'service' => 'required',
            'price' => 'required',
            'laundry_id' => 'required',
        ];

        $validated = $request->validate($rules);

        Service::where('id', $id)->update($validated);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Service::where('id', $id)->delete();
        SubService::where('service_id', $id)->delete();

        return redirect()->back();
    }
}
