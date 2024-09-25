<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawsuit;

class LawsuitController extends Controller
{
    public function create()
    {
        $nextCaseId = Lawsuit::max('id') + 1;
        return view('add_case', compact('nextCaseId'));
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'case_number' => 'required|string|max:255',
            'case_type' => 'required|string|max:255',
            'case_subject' => 'required|string|max:255',
        ]);

        // إنشاء سجل جديد في جدول القضايا
        Lawsuit::create($validatedData);

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('add_case')->with('success', 'تم إضافة القضية بنجاح!');
    }

    public function index()
    {
        $lawsuits = Lawsuit::all();
        return view('lawsuits.index', compact('lawsuits'));
    }
}
