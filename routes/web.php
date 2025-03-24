<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
    return view('home');
});


Route::post('/register',[UserController::class, 'register']);
Route::post('/logout',[UserController::class, 'logout']);
Route::post('/login',[UserController::class,'login']);
// Route::post('/register', function(){
//     return 'thank you';
// });
//Time to put this in a Controller