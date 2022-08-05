<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\PensionController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'App\Http\Controllers\ApI\RegisterController@register');
Route::post('login', 'App\Http\Controllers\API\RegisterController@login');
   
Route::middleware('auth:api')->group( function () {
    


    Route::get('getAllPensioner',[PensionController::class,'index'])->name('index');
    Route::get('getByid/{id}',[PensionController::class,'show'])->name('show');
    Route::post('pensionerAdd',[PensionController::class,'store'])->name('store');
    Route::put('pensionUpdate/{id}',[PensionController::class,'update'])->name('update');
    Route::delete('pensionerDelete/{id}',[PensionController::class,'destroy'])->name('destroy');
    Route::get('getByname/{name}',[PensionController::class,'getByName'])->name('getByName');
    Route::get('getByAddress/{address}',[PensionController::class,'getByAddress'])->name('getByAddress');
    Route::get('getByRegistration/{reg}',[PensionController::class,'getByReg'])->name('getByReg');
});