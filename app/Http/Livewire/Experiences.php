<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Experience;

class Experiences extends Component
{
    public $company_name;
    public $start_date;
    public $end_date;
    public $certificate_archive;

    public function render()
    {
        return view('livewire.experiences');
    }

    public function create()
    {
        $this->validate([
            'company_name' => 'required|string|max:150',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'certificate_archive' => 'nullable|string|max:2048', 
        ]);
    
        $experience = new Experience();
        
        $experience->company_name = $this->company_name;
        $experience->start_date = $this->start_date;
        $experience->end_date = $this->end_date;
        $experience->certificate_archive = $this->certificate_archive;
        $experience->user_id = Auth::id();
        
        $experience->save();
        
        session()->flash('message', 'Experience uploaded successfully!');
        
        $this->reset();
    }
    
}
