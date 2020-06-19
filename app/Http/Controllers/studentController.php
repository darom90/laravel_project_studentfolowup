<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.view',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = new Student;
        $student -> firstName=$request->get('firstName');
        $student -> lastName=$request->get('lastName');
        $student -> class=$request->get('class');
        $student -> decription=$request->get('decription');
        $student -> picture=$request->get('picture');
        $student -> activefolowup=$request->get('activefolowup');
        $student ->save();
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
        $student = Student::find($id);
        return view('student.edit', compact('student'));
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
        $student = Student::find($id);
        $student -> firstName=$request->get('firstName');
        $student -> lastName=$request->get('lastName');
        $student -> class=$request->get('class');
        $student -> decription=$request->get('decription');
        $student -> picture=$request->get('picture');
        $student -> activefolowup=$request->get('activefolowup');
        $student ->save();
        // return redirect('students');
        return redirect('student');
    }

    // public function showPost(){
    //     return view ('student.view',compact('student'));
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student -> delete();
        return redirect('student');
    }
}
