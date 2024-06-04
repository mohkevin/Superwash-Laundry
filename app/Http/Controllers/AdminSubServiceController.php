<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;

class AdminSubServiceController extends Controller
{
    public function create()
    {
        $service = Service::get();
        return view('admin.tambahSubService', [
            'title' => 'Tambah Sub Service',
            'active' => 'admin',
            'service' => $service
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sub_service' => 'required',
            'service_id' => 'required'
        ]);

        SubService::create($validated);

        return redirect()->back();
    }

    public function edit($id)
    {
        $service = Service::get();
        $subService = SubService::where('id', $id)->first();
        return view('admin.editSubService', [
            'title' => 'Edit Service',
            'active' => 'admin',
            'subService' => $subService,
            'service' => $service
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'sub_service' => 'required',
            'service_id' => 'required',
        ];

        $validated = $request->validate($rules);

        SubService::where('id', $id)->update($validated);

        return redirect()->back();
    }

    public function destroy($id)
    {
        SubService::where('id', $id)->delete();

        return redirect()->back();
    }
}
