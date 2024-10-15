<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Requisition;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $requisitions = Requisition::all();
        return view('requisition.index', compact('requisitions'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('requisition.create',
        compact('companies'));
    }

    public function store(Request $request)
    {
        Requisition::create($request->all());
        return redirect()->route('requisition.index')->with('success', 'Requisition created successfully.');
    }

    public function show($id)
    {
        $requisition = Requisition::findOrFail($id);
        return view('requisition.show', compact('requisition'));
    }

    public function edit($id)
    {
        $requisition = Requisition::findOrFail($id);
        $companies = Company::all();
    
        return view('requisition.edit', compact('requisition', 'companies'));
    }
    

    public function update(Request $request, $id)
    {
        $requisition = Requisition::findOrFail($id);
        $requisition->update($request->all());
        return redirect()->route('requisition.index')->with('success', 'Requisition updated successfully.');
    }

    public function destroy($id)
    {
        $requisition = Requisition::findOrFail($id);
        $requisition->delete();
        return redirect()->route('requisition.index')->with('success', 'Requisition deleted');
    }
}
