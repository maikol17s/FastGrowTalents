<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSkillController extends Controller
{
    public function index()
    {
        $userSkills = Ability::all();
        return view('user_skill.index', compact('userSkills'));
    }

    public function create()
    {
        return view('user_skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_id' => 'required',
            'skill_level' => 'nullable',
        ]);

        $userSkill = new Ability($request->all());
        $userSkill->user_id = Auth::id();
        $userSkill->save();

        return redirect()->route('user_skill.index')->with('success', 'User skill created successfully');
    }

    public function show($id)
    {
        $userSkill = Ability::findOrFail($id);
        return view('user_skill.show', compact('userSkill'));
    }

    public function edit($id)
    {
        $userSkill = Ability::findOrFail($id);
        return view('user_skill.edit', compact('userSkill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'skill_id' => 'required',
            'skill_level' => 'nullable',
        ]);

        $userSkill = Ability::findOrFail($id);
        $userSkill->update($request->all());

        return redirect()->route('user_skill.index')->with('success', 'User skill updated successfully');
    }

    public function destroy($id)
    {
        $userSkill = Ability::findOrFail($id);
        $userSkill->delete();

        return redirect()->route('user_skill.index')->with('success', 'User skill deleted successfully');
    }
}
