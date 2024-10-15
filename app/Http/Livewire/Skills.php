<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Livewire\Component;
use App\Models\Ability;
use Illuminate\Support\Facades\Auth;

class Skills extends Component
{
    public $skills;
    public $skill_id;
    public $skill_level;

    public function mount()
    {
        $this->skills = Skill::all();
    }

    public function render()
    {
        return view('livewire.skills');
    }

    public function create()
    {
        $this->validate([
            'skill_id' => 'required',
            'skill_level' => 'required',
        ]);
    
        $ability = new Ability();
        
        $ability->skill_id = $this->skill_id;
        $ability->skill_level = $this->skill_level;
        
        $ability->user_id = Auth::id();
        
        $ability->save();
        
        session()->flash('message', 'Skill uploaded successfully!');
        
        $this->reset();
    }

}
