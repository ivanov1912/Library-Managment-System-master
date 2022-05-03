<?php

namespace App\Http\Controllers\Visitor\Profile;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VisitorProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('visitor.crud.profile.profile', compact('user'));
    }

    public function getEditProfile(User $user)
    {
        $genders = Gender::all();
        return view('visitor.crud.profile.edit-profile', compact('user'),['genders'=>$genders]);
    }

    public function postUpdateProfile(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->gender_id = $request->gender_id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $user['image'] = $filename;
        }
        $user->save();
        return redirect()->route('profile.index')->with('message', 'Successfully updated data!');
    }
}
