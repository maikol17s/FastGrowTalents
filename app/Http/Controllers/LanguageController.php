<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('language.index', compact('languages'));
    }

    public function create()
    {
        return view('language.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'language_name' => 'required',
            'level' => 'required|in:Beginner,Intermediate,Advanced',
            'certificate_archive' => 'required|string|max:2048',
        ]);

        $language = new Language($request->all());
        $language->user_id = Auth::id(); 
        $language->save();

        return redirect()->route('language.index')->with('success', 'Language record created successfully');
    }

    public function show($id)
    {
        $language = Language::findOrFail($id);
        return view('language.show', compact('language'));
    }

    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('language.edit', compact('language'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'language_name' => 'required',
            'level' => 'required|in:Beginner,Intermediate,Advanced',
            'certificate_archive' => 'required|string|max:2048',
        ]);

        $language = Language::findOrFail($id);
        $language->update($request->all());

        return redirect()->route('language.index')->with('success', 'Language record updated successfully');
    }

    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();

        return redirect()->route('language.index')->with('success', 'Language record deleted successfully');
    }
}
