<?php

namespace App\Http\Livewire;

use App\Models\Postulations;
use Livewire\Component;

class Recruiter extends Component
{
    public $postulations;

    public function mount()
    {
        $this->postulations = Postulations::all();
    }

    public function render()
    {
        return view('livewire.recruiter');
    }
}
