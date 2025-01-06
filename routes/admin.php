<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name='Manish';
    flash()->success('Your question has been submitted.');
   return inertia('Home',compact('name'));
});

Route::get('admin/dashboard', AdminController::class, 'dashboard');


