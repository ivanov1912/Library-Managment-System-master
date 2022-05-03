<?php

namespace App\Http\Controllers\Visitor\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatusRequest;
use App\Models\Book;
use App\Models\User;
use App\Models\BooksFlags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function books()
    {
        $flags = BooksFlags::all();
        $id = Auth::id();
        $allBooks=User::find($id)->visitorBooks()->get();
        return view('visitor.crud.books.index', ['books'=>$allBooks,'flags' => $flags]);
    }

    public function favouriteStatusPage()
    {
        $id = Auth::id();
        $data=User::find($id)->visitorBooks()->where('flag_id',1 )->get();
        return view('visitor.crud.books.favourites', ['books' => $data]);
    }

    public function incomingsStatusPage()
    {
        $id = Auth::id();
        $data=User::find($id)->visitorBooks()->where('flag_id',2 )->get();
        return view('visitor.crud.books.incomings', ['books' => $data]);
    }

    public function readedStatusPage()
    {
        $id = Auth::id();
        $data=User::find($id)->visitorBooks()->where('flag_id',3 )->get();
        return view('visitor.crud.books.readed', ['books' => $data]);
    }

    public function archivedStatusPage()
    {
        $id = Auth::id();
        $data=User::find($id)->visitorBooks()->where('flag_id',4 )->get();
        return view('visitor.crud.books.archived', ['books' => $data]);
    }

    public function show($id)
    {
        $book = Book::where('id', $id)->first();
        return view('visitor.crud.books.details', compact('book'));
    }
}
