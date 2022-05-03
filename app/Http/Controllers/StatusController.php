<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Http\Requests\StatusRequest;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function updateStatusBook(StatusRequest $request, Book $book)
    {
        $validated= $request->validated();
        $book->update($validated);
        return redirect()->back()->with('message', 'Successfully updated book status!');
    }

    public function updateStatusUser(Request $request,  $id)
    {
        $validated->flag_id = $request->flag_id;
        $validated->save();
        return redirect()->back()->with('message', 'Successfully updated book status!');
    }

    public function approvedUsers(){ 
         $approvedUsers =  User::whereHas('user_flags', function($query) {
            $query->where('flag_id', 1)->where('role_id','=',1);
         })->get();

         return view('admin.crud.approved_users.index',['approvedUsers'=>$approvedUsers]);
    }

    public function waitingUsers(){
        $waitingUsers =  User::whereHas('user_flags', function($query) {
            $query->where('flag_id', 2)->where('role_id','=',1);
         })->get();

         return view('admin.crud.waiting-users.index',['waitingUsers'=>$waitingUsers]);
    }
}
