<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Standard;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $standards=Standard::get();
        return view('admin.standard', compact( 'standards'));
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
            'standard' => $request->standard,

        ];

        $standard = Standard::create($data);
        return redirect()->route('admin.standard.index');
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
    public function edit(Standard $standard)
    {
        $editstandard = $standard;
        // dd($edituser);
        $standards = Standard::get();
        return view('admin.Standard', compact('standards','editstandard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Standard $standard)
    {
        $data = [
            //Database column_name => Form field name
            'standard' => $request->standard,

        ];

        $standard = Standard::find($standard->id)->update($data);
        return redirect()->route('admin.standard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Standard $standard)
    {
        $standard->delete();
        return redirect()->route('admin.standard.index');
    }
}
