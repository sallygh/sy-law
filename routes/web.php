<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawsuitController;


Route::get('/', function () {
    return view('lawyer');
});

Route::get('/add_case', [LawsuitController::class, 'create'])->name('add_case');

Route::post('/cases', [LawsuitController::class, 'store'])->name('cases.store');
