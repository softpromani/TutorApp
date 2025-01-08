<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries=Country::get();
        $states=State ::get();
        return view('admin.state',compact('states','countries'));
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
            'state' => $request->state,
            'country_id' => $request->country_id,
        ];

        $state = State::create($data);
        return redirect()->route('admin.state.index');
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
    public function edit(State $state)
    {
        $countries=Country::get();
        $editstate= $state;
        // dd($edituser);
        $states = State::get();
        return view('admin.state', compact('editstate','states','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $data = [
            //Database column_name => Form field name
            'state' => $request->state,
            'country_id' => $request->country_id,
        ];

        $state = State::find($state->id)->update($data);
        return redirect()->route('admin.state.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->route('admin.state.index');
    }
}
