<?php

namespace App\Http\Controllers;

use App\Models\LegalCase;
use Illuminate\Http\Request;

class LegalCaseController extends Controller
{
    public function index()
    {
        $legalCases = LegalCase::all();
        return view('legal_cases.index', compact('legalCases'));
    }

    public function create()
    {
        return view('legal_cases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'case_number' => 'required',
            'case_type' => 'required',
        ]);

        LegalCase::create($request->all());

        return redirect()->route('legal_cases.index')
                         ->with('success', 'Legal case created successfully.');
    }

    public function edit(LegalCase $legalCase)
    {
        return view('legal_cases.edit', compact('legalCase'));
    }

    public function update(Request $request, LegalCase $legalCase)
    {
        $request->validate([
            'case_number' => 'required',
            'case_type' => 'required',
        ]);

        $legalCase->update($request->all());

        return redirect()->route('legal_cases.index')
                         ->with('success', 'Legal case updated successfully.');
    }

    public function destroy(LegalCase $legalCase)
    {
        $legalCase->delete();

        return redirect()->route('legal_cases.index')
                         ->with('success', 'Legal case deleted successfully.');
    }
}
