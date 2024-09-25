<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawsuitController;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('lawyer');
});

Route::get('/add_case', [LawsuitController::class, 'create'])->name('add_case');

Route::post('/cases', [LawsuitController::class, 'store'])->name('cases.store');


Route::resource('clients', ClientController::class)->names([
    'index' => 'clients.list',
    'create' => 'clients.new',
    'store' => 'clients.save',
    'show' => 'clients.view',
    'edit' => 'clients.modify',
    'update' => 'clients.update',
    'destroy' => 'clients.delete'
]);

use App\Http\Controllers\LegalCaseController;

Route::resource('legal_cases', LegalCaseController::class);


