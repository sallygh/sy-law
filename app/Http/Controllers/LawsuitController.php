<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lawsuit;


class LawsuitController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'case_number' => 'required',
        'case_type' => 'required',
    ]);

    Lawsuit::create($request->all());

    return redirect('/lawsuits')->with('success', 'تم إضافة القضية بنجاح');
}

}
