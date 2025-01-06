<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions=Subscription::get();
        return view('admin.subscription',compact('subscriptions'));
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
            'subscription_name' => $request->subscription_name,

        ];

        $subscription = Subscription::create($data);
        return redirect()->route('admin.subscription.index');
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
    public function edit(Subscription $subscription)
    {
        $editsubscription= $subscription;
        // dd($edituser);
        $subscriptions = Subscription::get();
        return view('admin.subscription', compact('editsubscription','subscriptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        $data = [
            //Database column_name => Form field name
            'subscription_name' => $request->subscription_name,

        ];

        $subscription = Subscription::find($subscription->id)->update($data);
        return redirect()->route('admin.subscription.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect()->route('admin.subscription.index');
    }
}
