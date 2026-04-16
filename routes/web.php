<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function(){
    return "Rafli";
});

Route::get('/npm', function(){
    return "55201220";
});

Route::redirect('/nama','/npm');



Route::get('/biodata/{nama?}', function($nama = "ujang"){
    return view("mahasiswa");
});



Route::get('/biodatamhs', [MahasiswaController::class, 'TampilBiodata']);

Route::get('/fotomhs', [MahasiswaController::class, 'Tampilfoto']);

Route::get('/mhs/{nama}/{kelas}', function($nama, $kelas){
    return view('mahasiswa', ['name' => $nama, 'kelas' => $kelas]);
});