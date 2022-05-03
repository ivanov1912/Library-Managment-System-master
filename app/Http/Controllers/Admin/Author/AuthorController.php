<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Models\Gender;
use App\Models\GendreAuthor;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Author::all();
        return view('admin.crud.authors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['genders'] = Gender::all();
        $data['genres'] = GendreAuthor::all();
        return view('admin.crud.authors.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        $validated = $request->validated();
        $author = Author::create($validated);
        $author->save();
        return redirect()->route('author.index')->with('message','Successfully created data!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        $genres = GendreAuthor::all();
        $genders = Gender::all();
        return view('admin.crud.authors.edit',compact('author'),
        ['genres'=>$genres,'genders'=>$genders]);
    }

    /**
     * Update the specified resource in storage.
     *
    * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request, Author $author)

    {
        $validated = $request->validated();
        $author->update($validated);

        return redirect()->route('author.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Author $author)
    {
        $author->delete();
        return redirect()->back();
    }
}
