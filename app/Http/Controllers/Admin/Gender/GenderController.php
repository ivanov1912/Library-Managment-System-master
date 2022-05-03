<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenderRequest;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;

class GenderController extends Controller
{
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Gender::all();
        return view('admin.crud.genders.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.genders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenderRequest $request)
    {
        $validated = $request->validated();
        $gender = Gender::create($validated);
        $gender->save();
        return redirect()->route('gender.index')->with('message', 'Successfully created data!');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $gender)
    {
        return view('admin.crud.genders.edit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenderRequest $request,Gender $gender)
    {
        $validated= $request->validated();
        $gender->update($validated);
        return redirect()->route('gender.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Gender $gender)
    {
        $gender->delete();
        return redirect()->back();
    }

    public function userGender(Gender $gender){
        $users= $gender->users()->get();
        return view('admin.crud.genders.assigned-users',['users'=>$users]);
    }

    public function authorGender(Gender $gender) {
        $authors= $gender->authors()->get();
        return view('admin.crud.genders.assinged-authors',['authors'=>$authors]);
    }
}
