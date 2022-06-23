<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function login(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();
        $notification = array(
            'message' => 'Profile Login successfully',
            'alert-type' => 'success'
        );
        return redirect()->intended(RouteServiceProvider::HOME)->with($notification);
    }


    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'Profile Logout successfully',
            'alert-type' => 'success'
        );
        return redirect('/login')->with($notification);
    }

    public function profile()
    {
        $id = auth()->user()->id;
        $adminData = User::find($id);
        return view('dashboard.admin.profile.profile_view', compact('adminData'));

    }

    public function EditProfile()
    {
        $id = auth()->user()->id;
        $adminData = User::find($id);
        return view('dashboard.admin.profile.profile_edite', compact('adminData'));

    }

    public function UpdateProfile(Request $request)
    {
        $id = auth()->user()->id;
        $data = User::findOrFail($id);
        $data->update($request->all());

        if ($request->file('profile_image'))
        {
            $file = $request->file('profile_image');
            $filename = date('YmHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Profile Update',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile.view')->with($notification);

    }

    public function ChangePassword()
    {
        return view('dashboard.admin.profile.change_password');
    }

    public function UpdatePassword(Request $request)
    {
        $validationData = $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->new_password);
            $user->save();
            session()->flash('message','Password Updates Successfully');
        } else {
            session()->flash('message','old password is not match');
        }
        return redirect()->back();
    }
}
