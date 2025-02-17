<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class, 'home'])->name('homepage');

Route::get('signin_view', [UserController::class,'signin_view'] )->name('signinpage');

Route::get('signup_view', [UserController::class,'signup_view'] )->name('signuppage');

Route::post('signup', [UserController::class,'signup'] )->name('signupdata');

Route::post('signin', [UserController::class,'signin'] )->name('signindata');

Route::get('user_list', [UserController::class,'user_view'] )->name('userpage');

Route::get('user_edit/{id}', [UserController::class,'update_view'] )->name('usereditpage');

Route::put('edite/{id}', [UserController::class,'update'])->name('updatedata');

Route::delete('delete/{id}',[UserController::class,'delete'] )->name('deleteuser');


