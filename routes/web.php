<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LawsuitController;

Route::get('/', function () {
    return view('lawyer');
});




Route::get('/add_case', function () {
    return view('add_case');
})->name('add_case');


Route::post('/cases', function (Illuminate\Http\Request $request) {
    // هنا يمكنك إضافة الكود لحفظ بيانات القضية في قاعدة البيانات
    // على سبيل المثال:
    // Case::create($request->all());
    return redirect('/add_case')->with('success', 'تم إضافة القضية بنجاح');
});

Route::get('/lawsuits', [LawsuitController::class, 'store']);


