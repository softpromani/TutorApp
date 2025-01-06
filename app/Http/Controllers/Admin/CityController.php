<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries=Country::get();
        $states=State::get();
        $cities=City::get();
        return view('admin.city',compact('states','countries', 'cities'));
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
            'city_name' => $request->city_name,
            'state_id' => $request->state_id,
            'pin_code' => $request->pin_code,
        ];

        $city = City::create($data);
        return redirect()->route('admin.city.index');
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
    public function edit(City $city)
    {
        $countries=Country::get();
        // dd($edituser);
        $states = State::get();
        $editcity= $city;
        $cities=City::get();
        return view('admin.city', compact('editcity','cities','states','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $data = [
            //Database column_name => Form field name
            'city_name' => $request->city_name,
            'state_id' => $request->state_id,
            'pin_code' => $request->pin_code,
        ];

        $city = City::find($city->id)->update($data);
        return redirect()->route('admin.city.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('admin.city.index');
    }
}
