<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects=Subject::get();
        return view('admin.subject',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            //Database column_name => Form field name
            'subject_name' => $request->subject_name,

        ];

        $subject = Subject::create($data);
        return redirect()->route('admin.subject.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        $editsubject= $subject;
        // dd($edituser);
        $subjects = Subject::get();
        return view('admin.subject', compact('editsubject','subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $data = [
            //Database column_name => Form field name
            'subject_name' => $request->subject_name,

        ];

        $subject = Subject::find($subject->id)->update($data);
        return redirect()->route('admin.subject.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('admin.subject.index');
    }
}
