<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:150',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'certificate_archive' => '',
        ]);

        $experience = new Experience($request->all());
        $experience->user_id = Auth::id(); 
        $experience->save();

        return redirect()->route('experience.index')->with('success', 'Experience record created successfully');
    }

    public function show($id)
    {
        $experience = Experience::findOrFail($id);
        return view('experience.show', compact('experience'));
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required|string|max:150',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'certificate_archive' => 'required|string|max:2048',
        ]);

        $experience = Experience::findOrFail($id);
        $experience->update($request->all());

        return redirect()->route('experience.index')->with('success', 'Experience record updated successfully');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect()->route('experience.index')->with('success', 'Experience record deleted successfully');
    }
}
