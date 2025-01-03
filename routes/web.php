<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name='Manish';
    flash()->success('Your question has been submitted.');
   return inertia('Home',compact('name'));
});
