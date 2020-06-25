<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Student;
use App\User;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showcomment($id)
    {
        //
   
        $student = Student::find($id);
        // dd($student);
        return view ('comment.viewcomment',compact(['student','id']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showformcomment($id)
    {
        //

        return view ('comment.addcomment',compact('id'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecomment(Request $request,$id)
    {
        //

    // $students = Student::find($id);
    // $user = User::find(auth::id());
    // $comment = new \App\Comment();
    // $comment->comment = $request->get('comment');
    // $comment->user_id = $user->id;
    // $comment->student_id=$students->id;
    // $comment->save();
    // return redirect()->route('admin.comment',$students->id);
    // $student = Student::find($id);


    // $user = Auth::id();
    // $comment = new Comment();
    // $comment->comment = $request->get('comment');
    // $comment->user_id=$user;
    // $comment->student_id=$id;

    // $comment ->save();
    // return redirect('student');


    $comment =new Comment;
        $comment -> student_id = $id;
        $comment -> user_id = Auth::id();
        $comment -> comment = $request -> get('comment');
        $comment -> save();
        return redirect('student');
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
    public function edit($id)
    {
        //
        $comment = Comment::find($id);
        return view('comment.editcomment',compact('comment'));
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
        //
        $comment = Comment::find($id);
        $comment ->comment=$request->get('comment');
        $comment->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
