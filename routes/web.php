<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route untuk menampilkan data dari model user
Route::get('/users', function(){
    $users = User::all();
    return view('users.index', compact('users'));
});

// route untuk menampiln data dari model user melalui controller
Route::get('/usersC', [UserController::class, 'index']);