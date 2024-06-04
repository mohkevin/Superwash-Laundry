<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Service;
use App\Models\SubService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::get();
        $laundry = Laundry::get();
        $services = Service::get();
        $subServices = SubService::get();
        return view('admin.index', [
            'title' => 'Admin',
            'active' => 'admin',
            'users' => $users,
            'laundry' => $laundry,
            'services' => $services,
            'subServices' => $subServices
        ]);
    }   

    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('admin.editUser', [
            'title' => 'Admin',
            'active' => 'admin',
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email:dns',
        ]);

        if($request->input('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        User::where('id', $id)->update($validated);

        return redirect()->back();
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back();
    }
}
