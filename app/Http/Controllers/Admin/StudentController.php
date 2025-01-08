<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\StudentProfile;
use App\Models\TeacherProfile;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries=Country::get();
        $states=State::get();
        $cities=City::get();
        $boards=Board::get();
        $students=StudentProfile::get();
        return view('admin.student.view',compact('states','countries', 'cities','students','boards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::get();
        $states=State::get();
        $cities=City::get();
        $boards=Board::get();
        
        return view('admin.student.add',compact('states', 'countries', 'cities','boards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            //Database column_name => Form field name
            'user_id' => $request->user_id,
            'address' => $request->address,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'board_id' => $request->board_id,
            'standard' => $request->standard,
            'section' => $request->section,
            'phone' => $request->phone,
            'alternate_phone' => $request->alternate_phone,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
        ];

        $student = StudentProfile::create($data);
        return redirect()->route('admin.student.index');
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
    public function edit(StudentProfile $student)
    {
        $countries=Country::get();
        // dd($edituser);
        $states = State::get();
        $cities=City::get();
        $boards=Board::get();
        $editstudent=$student;
        $students=StudentProfile::get();
        return view('admin.student.add', compact('cities','states','countries','boards','students' ,'editstudent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentProfile $student)
    {
        $data = [
            //Database column_name => Form field name
            'user_id' => $request->user_id,
            'address' => $request->address,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'board_id' => $request->board_id,
            'standard' => $request->standard,
            'section' => $request->section,
            'phone' => $request->phone,
            'alternate_phone' => $request->alternate_phone,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
        ];

        $student = StudentProfile::find($student->id)->update($data);
        return redirect()->route('admin.student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentProfile $student)
    {
        $student->delete();
        return redirect()->route('admin.student.index');
    }
}
