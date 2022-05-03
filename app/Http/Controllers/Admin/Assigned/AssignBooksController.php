<?php

namespace App\Http\Controllers\Admin\Assigned;

use App\Http\Controllers\Controller;
use App\Models\AssignBook;
use App\Models\Book;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AssignBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = AssignBook::all();
        return view('admin.crud.assign_book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['books'] = Book::all();
        $data['users'] = User::where('role_id', '=', '1')->get();
        return view('admin.crud.assign_book.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AssignBook $assignBook)
    {

        $assignBook::updateOrCreate(
         [
             'user_id'     => $request->get('user_id'),
             'book_id' => $request->get('book_id'),
             'date_of_receipt'    => Carbon::today()->format('Y-m-d'),
             'date_of_return'   => $request->get('date_of_return'),
         ]);
    
        
       
        // foreach ($request->user_id as $key => $value) {
        //     $saveRecord = [
        //         'user_id' => $request->user_id[$key],
        //         'book_id' => $request->book_id[$key],
        //         'date_of_receipt' => Carbon::today()->format('Y-m-d'),
        //         'date_of_return' => $request->date_of_return,
        //     ];
        //     AssignBook::create($saveRecord);
        // }
        return redirect()->back()->with('message', 'Successfully created data!');
    }

}
