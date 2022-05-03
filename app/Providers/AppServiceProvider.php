<?php

namespace App\Providers;

use App\Models\AssignBook;
use App\Models\Author;
use App\Models\Book;
use App\Models\Gender;
use App\Models\GendreAuthor;
use App\Models\GendreBook;
use App\Models\Role;
use App\Models\User;
use App\Models\UserFlags;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.navigations.sidebar', function ($view) {

            $usersCount = User::all()->count();
            $usersRolesCount = Role::all()->count();
            $authorsCount = Author::all()->count();
            $booksCount = Book::all()->count();
            $rolesCount = Role::all()->count();
            $gendersCount = Gender::all()->count();
            $genresBooks = GendreBook::all()->count();
            $genresAuthors = GendreAuthor::all()->count();
            $assigned_booksCount = AssignBook::all()->count();

            $visitorsCount= User::where('role_id', '=', 1)->count();
            $adminsCount= User::where('role_id', '=', 2)->count();

            $approvedUsersCount =  User::whereHas('user_flags', function($query) {
                $query->where('flag_id', 1)->where('role_id','=',1);
             })->count();
            $waitingUsersCount =  User::whereHas('user_flags', function($query) {
                $query->where('flag_id', 2)->where('role_id','=',1);
                })->count();

            $view->with([
                'usersCount' => $usersCount,
                'visitorsCount' => $visitorsCount,
                'adminsCount' => $adminsCount,
                'usersRolesCount' => $usersRolesCount,
                'rolesCount' => $rolesCount,
                'booksCount' => $booksCount,
                'authorsCount' => $authorsCount,
                'gendersCount' => $gendersCount,
                'genresBooks' => $genresBooks,
                'genresAuthors' => $genresAuthors,
                'genresAuthors' => $genresAuthors,
                'assigned_booksCount' => $assigned_booksCount,
                'approvedUsersCount'=>$approvedUsersCount,
                'waitingUsersCount'=>$waitingUsersCount,
            ]);
        });

        

    }
}
