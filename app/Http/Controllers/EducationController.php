<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('education.index', compact('educations'));
    }

    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'academic_level_id' => 'required',
            'institution_name' => 'required',
            'certificate_archive' => 'required|string|max:2048',
        ]);

        $education = new Education($request->all());
        $education->user_id = Auth::id(); 
        $education->save();

        return redirect()->route('education.index')->with('success', 'Education record created successfully');
    }

    public function show($id)
    {
        $education = Education::findOrFail($id);
        return view('education.show', compact('education'));
    }

    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'academic_level_id' => 'required',
            'institution_name' => 'required',
            'certificate_archive' => 'required|string|max:2048',
        ]);

        $education = Education::findOrFail($id);
        $education->update($request->all());

        return redirect()->route('education.index')->with('success', 'Education record updated successfully');
    }

    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('education.index')->with('success', 'Education record deleted successfully');
    }
}
