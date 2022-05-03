<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\AssignBook;
use App\Models\Author;
use App\Models\Book;
use App\Models\GendreBook;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data['allData']=Book::all();
        return view('admin.crud.books.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['authors']=Author::all();
        $data['genres']=GendreBook::all();
        return view('admin.crud.books.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'year' => 'required',
            'image' => 'required',
            'author_id' => 'required',
            'genre_id' => 'required',
        ]);

        $book = new Book();
        $book->name=$request->name;
        $book->content=$request->content;
        $book->year=$request->year;
        $book->book_no = rand(0,100);
        $book->author_id=$request->author_id;
        $book->genre_id=$request->genre_id;
        if($request->file('image')){
            $file=$request->file('image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/images'),$filename);
            $book['image']=$filename;
        }
        $book->save();
        return redirect()->route('book.index')->with('message', 'Successfully created data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $book = Book::where('id', $id)->first();
        return view('visitor.crud.books.details', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $data['editData'] = Book::where('id', $id)->orderBy('id', 'asc')->get();
        $data['authors']=Author::all();
        $data['genres']=GendreBook::all();
        return view('admin.crud.books.edit',$data);
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
        $book = Book::where('id',$id)->first();
        $book->name = $request->name;
        $book->content = $request->content;
        $book->year = $request->year;
        $book->author_id = $request->author_id;
        $book->genre_id = $request->genre_id;
        if($request->file('image')){
            $file=$request->file('image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/images'),$filename);
            $book['image']=$filename;
        }

        $book->save();
        return redirect()->route('book.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data=Book::find($id);
        $data->delete();
        return redirect()->route('book.index');
    }

    public function visitorBook($id)
    {
        $data['allData'] = AssignBook::select('user_id',)->where('book_id', $id)->get();
        return view('admin.crud.users.assigned-users',$data);
    }

    public function comments($id){
        $data['comments']=Book::find($id)->comments;
        return view('admin.crud.books.comments.comments',$data);
    }

     public function deleteAssignBook(AssignBook $assbook){
        $assbook->delete();
        return redirect()->back();
     }
}
