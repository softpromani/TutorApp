<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries=Country::get();
        return view('admin.country',compact('countries'));

    }

    /**
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
            'name' => $request->name,
            'code' => $request->code,
            'phone_code' => $request->phone_code,

        ];

        $country = Country::create($data);
        return redirect()->route('admin.country.index');
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
    public function edit(Country $country)
    {
        $editcountry= $country;
        // dd($edituser);
        $countries = Country::get();
        return view('admin.country', compact('editcountry','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $data = [
            //Database column_name => Form field name
            'name' => $request->name,
            'code' => $request->code,
            'phone_code' => $request->phone_code,
        ];

        $country = Country::find($country->id)->update($data);
        return redirect()->route('admin.country.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('admin.country.index');
    }
}
