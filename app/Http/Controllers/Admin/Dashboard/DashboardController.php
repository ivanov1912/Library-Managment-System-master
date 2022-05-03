<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AssignBook;
use App\Models\AssignComment;
use App\Models\Author;
use App\Models\Book;
use App\Models\Gender;
use App\Models\GendreAuthor;
use App\Models\GendreBook;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index(
        User $user, 
        Gender $gender,
        Role $role,
        Book $book,
        Author $author,
        GendreBook $genreBook,
        GendreAuthor $genreAuthor,
        AssignComment $comment,
        AssignBook $assignedBook
        )
    {


         $waitingUsers = $user::whereHas('user_flags', function (Builder $query) {
            $query->where('flag_id', '=', '1');
           })->count();

           
         $approvedUsers = $user::whereHas('user_flags', function (Builder $query) {
            $query->where('flag_id', '=', '2');
           })->count();

        $readers = $user::whereHas('visitorBooks', function (Builder $query) {
            $query->whereNotNull('flag_id');
           })->count();

        $data['authors'] = $author::count();
        $data['books'] = $book->count();
        $data['users'] = $user->count();
        $data['roles'] = $role->count();
        $data['genders'] = $gender->count();
        $data['genreAuthors'] = $genreAuthor->count();
        $data['genreBooks'] = $genreBook->count();
        $data['comments'] = $comment->count();
        $data['assignedBooks'] = $assignedBook->count();
        $data['readers'] = $readers;
        $data['waitingUsers'] = $waitingUsers;
        $data['approvedUsers'] = $approvedUsers;
        $data['visitor'] = User::where('role_id', '=', 1)->get();
        $data['admin'] = User::where('role_id', '=', 2)->get();

        return view('admin.dashboard.index', $data);
    }
}
