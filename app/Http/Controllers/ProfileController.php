<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Profile;
use App\Models\userSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        Profile::create($request->all());
        return redirect()->route('profile.index')->with('success', 'Profile created successfully.');
    }

    public function show(Profile $profile)
    {
        $idUsuario = Auth::id();
        
        $habilidades = userSkill::where('id_usuario', $idUsuario)->get();
        $idiomas = Language::where('id_usuario', $idUsuario)->get();

        return view('profile.show', compact('profile', 'habilidades', 'idiomas'));
    }
    
    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profile.index')->with('success', 'Profile deleted successfully.');
    }

    public function viewResume()
    {
        return view('profile.show');
    }
}
