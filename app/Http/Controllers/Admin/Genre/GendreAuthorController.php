<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreAuthorRequest;
use App\Models\Author;
use App\Models\GendreAuthor;

use Illuminate\Http\Request;

class GendreAuthorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['allData'] = GendreAuthor::all();
        return view('admin.crud.gendre-authors.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.gendre-authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreAuthorRequest $request)
    {
        $validated=$request->validated();
        $genre = GendreAuthor::create($validated);
        $genre->save();

        return redirect()->route('gendre.author.index')->with('message', 'Successfully created data!');
    }

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
    public function edit(GendreAuthor $genre)
    {
        return view('admin.crud.gendre-authors.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenreAuthorRequest $request, GendreAuthor $genre)
    {
        $validated = $request->validated();
        $genre->update($validated);
        return redirect()->route('gendre.author.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(GendreAuthor $genre)
    {
        $genre->delete();
        return redirect()->route('gendre.book.index');
    }

    public function genreAuthors(GendreAuthor $genre){
        $authors = $genre->authors()->get();
        return view('admin.crud.authors.assigned-authors',['authors'=>$authors]);
    }

}
