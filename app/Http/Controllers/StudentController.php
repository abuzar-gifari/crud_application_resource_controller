<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $student = new Student();
        $student->name=$request->input('name');
        $student->course=$request->input('course');
        $student->section=$request->input('section');
        $student->email=$request->input('email');
        $student->save();
        // return redirect('students')->back()->with('message','student created successfully');
        return redirect('students')->with('message','student created successfully');
        // return view('student.index');
    }

    public function show($id)
    {
        $student=Student::find($id);
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        return view('student.edit',compact('student')); 
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
        //dd($request);
        $student = Student::find($id);
        $student->name=$request->input('name');
        $student->course=$request->input('course');
        $student->section=$request->input('section');
        $student->email=$request->input('email');
        $student->update();
        // return redirect('students')->back()->with('message','student created successfully');
        return redirect('students')->with('message','student updated successfully');
        // return view('student.index');
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
