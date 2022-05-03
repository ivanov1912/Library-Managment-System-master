<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreBookRequest;
use App\Models\GendreBook;
use Illuminate\Http\Request;

class GendreBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = GendreBook::all();
        return view('admin.crud.gendre-books.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.gendre-books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreBookRequest $request)
    {
        $validated=$request->validated();
        $genre = GendreBook::create($validated);
        $genre->save();
        return redirect()->route('gendre.book.index')->with('message', 'Successfully created data!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function edit(GendreBook $genre)
    {
        return view('admin.crud.gendre-books.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenreBookRequest $request, GendreBook $genre)
    {
        $validated = $request->validated();
        $genre->update($validated);
        return redirect()->route('gendre.book.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(GendreBook $genre)
    {
        $genre->delete();
        return redirect()->back();
    }

    public function genreBooks (GendreBook $genre){
        $books = $genre->books()->get();
        return view('admin.crud.gendre-books.assigned-books',['books'=>$books]);
    }
}
