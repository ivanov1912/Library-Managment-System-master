<?php

namespace App\Http\Controllers\Visitor\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AssignComment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $id = Auth::id();

        $comments = AssignComment::where('user_id', '=', $id)->get();
        $commentsCollection = collect($comments)->count();

        //all books
        $allBooks=User::find($id)->visitorBooks()->count();
        //favourites        
        $bookFavCount=User::find($id)->visitorBooks()->where('flag_id',1 )->count();
        //incomigs
        $bookIncCount=User::find($id)->visitorBooks()->where('flag_id',2 )->count();
        //readed
        $bookReadedCount=User::find($id)->visitorBooks()->where('flag_id',3 )->count();
        //archived
        $bookArchCount=User::find($id)->visitorBooks()->where('flag_id',4 )->count();

        return view('visitor.dashboard.index',compact('commentsCollection','allBooks','bookFavCount','bookIncCount','bookReadedCount','bookArchCount'));
    }
}
