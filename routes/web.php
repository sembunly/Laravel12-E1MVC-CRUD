<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        'name' => 'Sem bunly',
        'age' => 25
    ]);
});

Route::view('/team', 'team');
Route::view('/project', 'project');
Route::view('/about', 'about');
Route::view('/page1', 'page');

// Job routes
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::resource('jobs',JobController::class);

// Employee routes
Route::resource('employee', EmployeeController::class);

// Student routes

Route::resource('student', StudentController::class);


Route::get('/login', [SessionController::class,'create']);
Route::post('/login', [SessionController::class,'store']);
Route::post('/logout', [SessionController::class,'destroy']);

Route::get('/register', [RegisterController::class,'create']);
Route::post('/register', [RegisterController::class,'store']);