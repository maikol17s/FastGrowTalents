<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Skill;
use App\Models\Study;
use App\Models\Company;
use App\Models\Workday;
use App\Models\Contract;
use App\Models\Occupation;
use App\Models\SalaryRange;
use App\Models\Municipality;

class OfferController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $offers = Offer::all();
        return view('offer.index', compact('offers'));
    }

    public function create()
    {
        $companies = Company::all();
        $occupations = Occupation::all();
        $contracts = Contract::all();
        $workdays = Workday::all();
        $studies = Study::all();
        $municipalities = Municipality::all();
        $salary_ranges = SalaryRange::all();
        $skills = Skill::all();

        return view(
            'offer.create',
            compact(
                'companies',
                'occupations',
                'contracts',
                'workdays',
                'studies',
                'municipalities',
                'salary_ranges',
                'skills'
            )
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'months_experience' => 'required|integer',
            'company_id' => 'required|exists:companies,id',
            'skill_id' => 'required|exists:skills,id',
            'salary_id' => 'required|exists:salary_ranges,id',
            'occupation_id' => 'required|exists:occupations,id',
            'contract_type_id' => 'required|exists:contracts,id',
            'workday_id' => 'required|exists:workdays,id',
            'academic_level_id' => 'required|exists:studies,id',
            'ubication_id' => 'required|exists:municipalities,id',
            'start_date' => 'required|date',
            'closing_date' => 'required|date|after:start_date',
            'requisition_id' => 'required|string',
        ]);

        Offer::create($request->all());

        return redirect()->route('offer.index')->with('success', 'Offer created successfully');
    }

    public function show(Offer $offer)
    {
        return view('offer.show', compact('offer'));
    }

    public function edit(Offer $offer)
    {
        $companies = Company::all();
        $occupations = Occupation::all();
        $contracts = Contract::all();
        $workdays = Workday::all();
        $studies = Study::all();
        $municipalities = Municipality::all();
        $salary_ranges = SalaryRange::all();
        $skills = Skill::all();

        return view(
            'offer.edit',
            compact(
                'companies',
                'occupations',
                'contracts',
                'workdays',
                'studies',
                'municipalities',
                'salary_ranges',
                'skills'
            )
        )->with('offer', $offer);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'months_experience' => 'required|integer',
            'company_id' => 'required|exists:companies,id',
            'skill_id' => 'required|exists:skills,id',
            'salary_id' => 'required|exists:salary_ranges,id',
            'occupation_id' => 'required|exists:occupations,id',
            'contract_type_id' => 'required|exists:contracts,id',
            'workday_id' => 'required|exists:workdays,id',
            'academic_level_id' => 'required|exists:studies,id',
            'ubication_id' => 'required|exists:municipalities,id',
            'start_date' => 'required|date',
            'closing_date' => 'required|date|after:start_date',
            'requisition_id' => 'required|string',
        ]);

        $offer = Offer::findOrFail($id);
        $offer->update($request->all());

        return redirect()->route('offer.index')->with('success', 'Offer updated successfully');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('offer.index')->with('success', 'Offer successfully removed');
    }
}
