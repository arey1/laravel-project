<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pensionController;
use App\Models\PensionerModel;



Route::get('/pensioner',[pensionController::class,'index'])->name('index');
Route::post('/pensioner/create',[pensionController::class,'store'])->name('store');
Route::get('/pensioner/{id}',[pensionController::class,'show'])->name('show');
Route::get('pensioner/name/{name}',[pensionController::class,'getByName'])->name('getByName');
Route::get('pensioner/address/{address}',[pensionController::class,'getByAddress'])->name('getByAddress');
Route::get('pensioner/registration_no/{reg}',[pensionController::class,'getByReg'])->name('getByReg');

Route::get('/admin', function () {
    return view('welcome');
}); 

Route::get('/', function () {
    return view('public');
}); 





   

