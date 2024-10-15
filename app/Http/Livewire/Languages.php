<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;

class Languages extends Component
{
    public $language_name;
    public $level;
    public $certificate_archive;

    public function render()
    {
        return view('livewire.languages');
    }

    public function create()
    {
        $this->validate([
            'language_name' => 'required',
            'level' => 'required',
            'certificate_archive' => 'nullable|file|max:2048', 
        ]);
    
        $language = new Language();
        
        $language->language_name = $this->language_name;
        $language->level = $this->level;
        $language->certificate_archive = $this->certificate_archive; 
        
        $language->user_id = Auth::id();
        
        $language->save();
        
        session()->flash('message', 'Language uploaded successfully!');
        
        $this->reset();
    }
}
