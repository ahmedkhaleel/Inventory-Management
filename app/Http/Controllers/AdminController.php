<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function login(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
    }


    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile()
    {
     $id = auth()->user()->id;
     $adminData = User::find($id);
     return view('dashboard.admin.profile_view', compact('adminData'));

    }
    public function EditProfile()
    {
        $id = auth()->user()->id;
        $adminData = User::find($id);
        return view('dashboard.admin.profile_edite', compact('adminData'));

    }
    public function UpdateProfile(Request $request)
    {
        $id = auth()->user()->id;
        $data = User::findOrFail($id);
        $data->update($request->all());

        if($request->file('profile_image')){
            $file = $request->file('profile_image');

            $filename = date('YmHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image'] = $filename;
        }
        $data->save();
        return redirect()->route('admin.profile.view');

    }
}