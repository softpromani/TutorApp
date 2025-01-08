<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\TeacherProfile;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries=Country::get();
        $states=State::get();
        $cities=City::get();
        $teachers=TeacherProfile::get();
        return view('admin.teacher.view',compact('states','countries', 'cities','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $countries = Country::get();
    $states = State::get();
    $cities = City::get();
    return view('admin.teacher.add', compact('countries', 'states', 'cities'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            //Database column_name => Form field name
            'teacher_id' => $request->teacher_id,
            'address' => $request->address,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'phone' => $request->phone,
            'alternate_phone' => $request->alternate_phone,
        ];

        $teacher = TeacherProfile::create($data);
        return redirect()->route('admin.teacher.index');
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
    public function edit(TeacherProfile $teacher)
    {
        $countries=Country::get();
        // dd($edituser);
        $states = State::get();
        $cities=City::get();
        $editteacher=$teacher;
        $teachers=TeacherProfile::get();
        return view('admin.teacher.add', compact('cities','states','countries','teachers','editteacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeacherProfile $teacher)
    {
        $data = [
            //Database column_name => Form field name
            'teacher_id' => $request->teacher_id,
            'address' => $request->address,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'phone' => $request->phone,
            'alternate_phone' => $request->alternate_phone,
        ];

        $teacher = TeacherProfile::find($teacher->id)->update($data);
        return redirect()->route('admin.teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherProfile $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teacher.index');
    }
}
