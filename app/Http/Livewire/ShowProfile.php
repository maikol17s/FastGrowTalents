<?php

namespace App\Http\Livewire;

use App\Models\Ability;
use App\Models\User;
use Livewire\Component;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;

class ShowProfile extends Component
{
    public $user_id;
    public $users;
    public $experiences;
    public $languages;
    public $educations;
    public $abilities;

    public function mount()
    {
        $userId = auth()->id();

        $this->users = User::findOrFail($userId);

        $this->users = User::where('id', $userId)->get();

        $this->experiences = Experience::where('id', $userId)->get();

        $this->languages = Language::where('id', $userId)->get();

        $this->educations = Education::where('id', $userId)->get();

        $this->abilities = Ability::where('id', $userId)->get();
    }
    
    public function render()
    {
        return view('livewire.show-profile');
    }
}
