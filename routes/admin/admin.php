<?php

use App\Http\Controllers\Admin\Assigned\AssignBooksController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Author\AuthorController;
use App\Http\Controllers\Admin\Book\BookController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Gender\GenderController;
use App\Http\Controllers\Admin\Genre\GendreAuthorController;
use App\Http\Controllers\Admin\Genre\GendreBookController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\Visitor\Assigned\AssignCommentController;


// Route::get('/dashboard/index', function () {
//     return view('admin.dashboard.index');
// })->middleware(['auth'])->name('dashboard.index');

// dashboard
Route::prefix('dashboard')->group(function () {
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard.index');
});


Route::prefix('users')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{user?}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/assigned/books/{id}', [UserController::class, 'visitorBook'])->name('user.assigned.book');
    Route::get('/comment/show/user/{id}', [UserController::class, 'comments'])->name('comment.show.user');
    Route::get('/delete/comment/user/{id}', [AssignCommentController::class, 'delete'])->name('delete.user.comment');
});


//profile 
    Route::prefix('profiles')->group(function () {
    Route::get('/admin/profile/', [ProfileController::class, 'show'])->name('admin.profile');
    Route::get('/admin/edit/{user}', [ProfileController::class, 'edit'])->name('edit.admin.profile');
    Route::post('/update/admin/profile/{id}', [ProfileController::class, 'update'])->name('update.admin.profile');
    });

    Route::prefix('status')->group(function () {
        Route::get('/approved/users/', [StatusController::class, 'approvedUsers'])->name('status.approved.users');
        Route::get('/waiting/users/', [StatusController::class, 'waitingUsers'])->name('status.waiting.users');
    });


// Books
    Route::prefix('books')->group(function () {
        Route::get('/index', [BookController::class, 'index'])->name('book.index');
        Route::get('/create', [BookController::class, 'create'])->name('book.create');
        Route::post('/store', [BookController::class, 'store'])->name('book.store');
        Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
        Route::post('/update/{id}', [BookController::class, 'update'])->name('book.update');
        Route::get('/delete/{id}', [BookController::class, 'delete'])->name('book.delete');
        Route::get('/assigned/users/{id}', [BookController::class, 'visitorBook'])->name('user.assigned.user');
        Route::get('/show/comments/{id}', [BookController::class, 'comments'])->name('comment.show.users');
        Route::get('/delete/assignbook/{assbook}',[BookController::class, 'deleteAssignBook'])->name('delete.assign.book');
    });

// Authors
    Route::prefix('authors')->group(function () {
        Route::get('/index', [AuthorController::class, 'index'])->name('author.index');
        Route::get('/create', [AuthorController::class, 'create'])->name('author.create');
        Route::post('/store', [AuthorController::class, 'store'])->name('author.store');
        Route::get('/edit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
        Route::post('/update/{author}', [AuthorController::class, 'update'])->name('author.update');
        Route::get('/delete/{author}', [AuthorController::class, 'delete'])->name('author.delete');
    });

// Genres (books)
    Route::prefix('gendrebooks')->group(function () {
        Route::get('/index', [GendreBookController::class, 'index'])->name('gendre.book.index');
        Route::get('/create', [GendreBookController::class, 'create'])->name('gendre.book.create');
        Route::post('/store', [GendreBookController::class, 'store'])->name('gendre.book.store');
        Route::get('/edit/{genre}', [GendreBookController::class, 'edit'])->name('gendre.book.edit');
        Route::post('/update/{genre}', [GendreBookController::class, 'update'])->name('gendre.book.update');
        Route::get('/delete/{genre}', [GendreBookController::class, 'delete'])->name('gendre.book.delete');
        Route::get('/assigned/books/{genre}', [GendreBookController::class, 'genreBooks'])->name('genre.assigned.book');
    });

// Genres (authors)
    Route::prefix('gendreauthors')->group(function () {
        Route::get('/index', [GendreAuthorController::class, 'index'])->name('gendre.author.index');
        Route::get('/create', [GendreAuthorController::class, 'create'])->name('gendre.author.create');
        Route::post('/store', [GendreAuthorController::class, 'store'])->name('gendre.author.store');
        Route::get('/edit/{genre}', [GendreAuthorController::class, 'edit'])->name('gendre.author.edit');
        Route::post('/update/{genre}', [GendreAuthorController::class, 'update'])->name('gendre.author.update');
        Route::get('/delete/{genre}', [GendreAuthorController::class, 'delete'])->name('gendre.author.delete');
        Route::get('/assigned/authors/{genre}', [GendreAuthorController::class, 'genreAuthors'])->name('genre.assigned.author');
    });

// Roles
    Route::prefix('roles')->group(function () {
        Route::get('/index', [RoleController::class, 'index'])->name('role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/edit/{role}', [RoleController::class, 'edit'])->name('role.edit');
        Route::post('/update/{role}', [RoleController::class, 'update'])->name('role.update');
        Route::get('/delete/{role}', [RoleController::class, 'delete'])->name('role.delete');
        Route::get('/assigned/users/{role}', [RoleController::class, 'userRole'])->name('roles.assigned.users');
    });

// Gendres (Genders)
    Route::prefix('genders')->group(function () {
        Route::get('/index', [GenderController::class, 'index'])->name('gender.index');
        Route::get('/create', [GenderController::class, 'create'])->name('gender.create');
        Route::post('/store', [GenderController::class, 'store'])->name('gender.store');
        Route::get('/edit/{gender}', [GenderController::class, 'edit'])->name('gender.edit');
        Route::post('/update/{gender}', [GenderController::class, 'update'])->name('gender.update');
        Route::get('/delete/{gender}', [GenderController::class, 'delete'])->name('gender.delete');
        Route::get('/assigned/users/{gender}', [GenderController::class, 'userGender'])->name('assigned.users');
        Route::get('/assigned/authors/{gender}', [GenderController::class, 'authorGender'])->name('assigned.authors');
    });

// AssignedBooks
    Route::prefix('assignbooks')->group(function () {
        Route::get('/create', [AssignBooksController::class, 'create'])->name('assign.book.create');
        Route::post('/store', [AssignBooksController::class, 'store'])->name('assign.book.store');
        Route::get('/delete/{id}', [AssignBooksController::class, 'delete'])->name('assign.book.delete');
    });

// user-roles
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::prefix('visitors')->group(function () {
        Route::get('/', [UserController::class, 'visitorIndex'])->name('visitor.view.index');
    });
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::prefix('admins')->group(function () {
        Route::get('/', [UserController::class, 'adminIndex'])->name('admin.view.index');
    });
});
