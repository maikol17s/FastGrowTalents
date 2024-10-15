<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Municipality;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    public function create()
    {
        $municipalities = Municipality::all();

        return view('company.create', [
            'municipalities' => $municipalities,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|max:100',
            'nit_number' => 'required|integer',
            'address' => 'required',
            'telephone' => 'required|integer',
            'email' => 'required|email|unique:companies',
            'ubication_id' => 'required|exists:municipalities,id'
        ]);
    
        Company::create($request->all());
        
        return redirect()->route('company.index')->with('success', 'Company created successfully');
    }
    
    public function show($companyId)
    {
        $company = Company::with('municipality')->find($companyId);

        return view('company.show', compact('company'));
    }

    public function edit(Company $company)
    {
        $municipalities = Municipality::all();

        return view('company.edit', [
            'municipalities' => $municipalities,
        ])->with('company', $company);
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'company_name' => 'required|max:100',
            'nit_number' => 'required|integer',
            'address' => 'required',
            'telephone' => 'required|integer',
            'email' => 'required|email|unique:companies,email,' . $company->id,
            'ubication_id' => 'required|exists:municipalities,id',
        ]);

        $company->update($request->all());

        return redirect()->route('company.index')->with('success', 'Company successfully updated');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('company.index')->with('success', 'Company successfully removed');
    }
}
