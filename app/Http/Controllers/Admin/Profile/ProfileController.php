<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('admin.crud.admin-profile.profile',compact('user'));
    }

    public function edit(User $user)
    {
        $genders = Gender::all();
        return view('admin.crud.admin-profile.edit-profile', compact('user'),['genders'=>$genders]);
    }

    public function update(Request $request, $id)
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
        return redirect()->route('admin.profile')->with('message', 'Successfully updated data!');
    }

}
