<?php

namespace App\Http\Livewire;

use App\Models\Study;
use Livewire\Component;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class Educations extends Component
{
    public $academic_level_id;
    public $institution_name;
    public $certificate_archive;
    public $studies;

    public function mount()
    {
        $this->studies = Study::all();
    }
    
    public function render()
    {
        return view('livewire.educations');
    }

    public function create()
    {
        $this->validate([
            'academic_level_id' => 'required',
            'institution_name' => 'required',
            'certificate_archive' => 'nullable|file|max:2048', 
        ]);
    
        $education = new Education();
        
        $education->academic_level_id = $this->academic_level_id;
        $education->institution_name = $this->institution_name;
        $education->certificate_archive = $this->certificate_archive; 
        
        $education->user_id = Auth::id();
        
        $education->save();
        
        session()->flash('message', 'Education uploaded successfully!');
        
        $this->reset();
    }
}
