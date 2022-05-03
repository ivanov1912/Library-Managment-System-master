<?php

namespace App\Http\Controllers\Visitor\Assigned;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssignedCommentRequest;
use App\Models\AssignBook;
use App\Models\AssignComment;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AssignCommentController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $data['books']=AssignBook::select('book_id')->where('user_id','=',$id)->get();
        return view('visitor.crud.comments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssignedCommentRequest $request)
    {
        $user=Auth::id();
        $comment= new AssignComment();
        $comment->name=$request->name;
        $comment->user_id=$user;
        $comment->book_id=$request->book_id;
        $comment->save();
        return redirect()->route('comment.show',$user)->with('message', 'Successfully created data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $id=Auth::id($id);
      $assignComments=AssignComment::where('user_id', '=', $id)->get();
      return view('visitor.crud.comments.inbox',['assignComments'=>$assignComments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Auth::id();
        $comment = User::find($user)->comments()->where(['id' => $id])->first(); 
        return view('visitor.crud.comments.edit',compact('comment'));
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
        $user=Auth::id();
        $comment=User::find($user)->comments()->where(['id' => $id])->first();
        $comment->name=$request->name;
        $comment->save();
        return redirect()->route('comment.show',$user)->with('message', 'Successfully created data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $comment=AssignComment::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
