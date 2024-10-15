<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonalDetails extends Component
{
    public function render()
    {
        return view('livewire.personal-details');
    }

    public $user;
    public $name;
    public $last_name;
    public $telephone;
    public $email;
    public $password;
    public $document_type;
    public $document_number;
    public $direction;
    public $references;

    public function loadUserData()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->last_name = $user->last_name;
        $this->telephone = $user->telephone;
        $this->email = $user->email;
        $this->document_type = $user->document_type;
        $this->document_number = $user->document_number;
        $this->direction = $user->direction;
        $this->references = $user->references;
    }

    public function update()
    {
        $user = auth()->user();

        if (!$user) {
            session()->flash('error', 'Usuario no encontrado');
            return;
        }

        $user->name = strtoupper($this->name);
        $user->last_name = strtoupper($this->last_name);
        $user->telephone = $this->telephone;
        $user->email = strtolower($this->email);
        $user->password = Hash::make($this->password);
        $user->document_type = $this->document_type;
        $user->document_number = $this->document_number;
        $user->direction = $this->direction;
        $user->references = $this->references;

        $user->save();

        session()->flash('success', 'Information successfully updated!');
    }
}
