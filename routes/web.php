<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BoardController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StandardController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name='Manish';
    flash()->success('Your question has been submitted.');
   return inertia('Home',compact('name'));
});

Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

Route::group([ 'prefix'=>'admin','as'=>'admin.'],function(){

    Route::resource('/country',CountryController::class);
    Route::resource('/state',StateController::class);
    Route::resource('/city',CityController::class);
    Route::resource('/board',BoardController::class);
    Route::resource('/standard',StandardController::class);
    Route::resource('/subject',SubjectController::class);
    Route::resource('/subscription',SubscriptionController::class);

    });
