<?php

namespace App\Http\Controllers;

use App\Models\AssignBook;
use App\Models\Book;
use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\UserFlags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $data['allData'] = User::whereNotNull('last_seen')
            ->orderBy('last_seen', 'asc')
            ->get();
        return view('admin.crud.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::all();
        $data['flags'] = UserFlags::all();
        $data['genders'] = Gender::all();
        return view('admin.crud.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->flag_id = $request->flag_id;
        $user->role_id = $request->role_id;
        $user->gender_id = $request->gender_id;
        $user->dob = $request->dob;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $user['image'] = $filename;
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.index')->with('message', 'Successfully created data!');
    }

    // $validated =$request->validated();

    // User::create($validated);

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
 * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $genders = Gender::all();
        $roles = Role::all();
        $flags = UserFlags::all();
        return view('admin.crud.users.edit',compact('user'),[
            'genders'=>$genders,
            'roles'=>$roles,
            'flags'=>$flags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->gender_id = $request->gender_id;
        $user->flag_id = $request->flag_id;
        $user->dob = $request->dob;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
        $user['image'] = $filename;
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function adminIndex()
    {
        $data['allData'] = DB::table('users')
            ->where('role_id', '=', 2)
            ->whereNotNull('last_seen')
            ->orderBy('last_seen', 'DESC')
            ->get();

        return view('admin.crud.users.adminView', $data);
    }

    public function visitorIndex()
    {
        $users = DB::table('users')
            ->where('role_id', '=', 1)
            ->whereNotNull('last_seen')
            ->orderBy('last_seen', 'DESC')
            ->get();
            
        $flags = UserFlags::all();
        return view('admin.crud.users.visitorView', ['users'=>$users, 'flags'=>$flags]);
    }

    public function visitorBook($id)
    {
        $data['allData'] = AssignBook::all()->where('user_id', $id);
        return view('admin.crud.books.assigned-books', $data);
    }

    public function comments($id)
    {
        $data['comments'] = User::find($id)->comments;
        return view('admin.crud.users.comments.comments', $data);
    }

}
