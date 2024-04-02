<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});


// create HomeController
Route::get('/user',[HomeController::class,'user'] )->middleware(['auth','user']);

Route::get('/admin',[HomeController::class,'admin'] )->middleware(['auth','admin']);



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',function (){return view('dashboard');})->name('dashboard');




});

// Route::any('/home', function () {
//     // ...
// });



