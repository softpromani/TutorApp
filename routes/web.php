<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BoardController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StandardController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\Auth\AuthController;
<<<<<<< Updated upstream
use App\Http\Controllers\Admin\TeacherController;
use App\Models\StudentProfile;
use App\Models\TeacherProfile;
=======
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name='Manish';
    flash()->success('Your question has been submitted.');
   return inertia('Home',compact('name'));
});


Route::get('admin/login', [AuthController::class, 'login'])->name('admin-login');
Route::post('admin/post-login', [AuthController::class, 'postLogin'])->name('admin-postlogin');
Route::get('test-data', [AdminController::class, 'test']);

Route::group([ 'prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('role',RoleController::class);
    Route::resource('permission',PermissionController::class);

    Route::resource('country',CountryController::class);
    Route::resource('state',StateController::class);
    Route::resource('city',CityController::class);
    Route::resource('board',BoardController::class);
    Route::resource('standard',StandardController::class);
    Route::resource('subject',SubjectController::class);
    Route::resource('subscription',SubscriptionController::class);
<<<<<<< Updated upstream
    Route::resource('teacher',TeacherController::class);
    Route::resource('student',StudentController::class);

=======
>>>>>>> Stashed changes
});
